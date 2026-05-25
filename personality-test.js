// Navigation and scoring for the personality test
(function () {
    const sections = Array.from(document.querySelectorAll('.section'));
    const progressBar = document.getElementById('progress-bar');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const finishBtn = document.getElementById('finishBtn');
    const restartBtn = document.getElementById('restartBtn');
    const resultsSection = document.getElementById('results');
    const resultsContent = document.getElementById('results-content');
    let current = 0;

    function showSection(n) {
        sections.forEach((s, i) => s.classList.toggle('hidden', i !== n));
        prevBtn.style.display = n === 0 ? 'none' : 'inline-block';
        nextBtn.classList.toggle('hidden', n === sections.length - 1);
        finishBtn.classList.toggle('hidden', n !== sections.length - 1);
        const pct = Math.round(((n) / (sections.length)) * 100);
        progressBar.style.width = pct + '%';
    }

    function ensureAnswered(section) {
        const radios = Array.from(section.querySelectorAll('input[type=radio]'));
        const names = new Set(radios.map(r => r.name));
        for (const name of names) {
            const checked = section.querySelector(`input[name="${name}"]:checked`);
            if (!checked) return false;
        }
        return true;
    }

    nextBtn.addEventListener('click', () => {
        const sec = sections[current];
        if (!ensureAnswered(sec)) {
            alert('Por favor responde todas las preguntas de esta sección antes de continuar.');
            return;
        }
        current = Math.min(sections.length - 1, current + 1);
        showSection(current);
    });

    prevBtn.addEventListener('click', () => {
        current = Math.max(0, current - 1);
        showSection(current);
    });

    finishBtn.addEventListener('click', () => {
        const lastSec = sections[current];
        if (!ensureAnswered(lastSec)) {
            alert('Por favor responde todas las preguntas de esta sección antes de continuar.');
            return;
        }
        computeResults();
    });

    restartBtn.addEventListener('click', () => {
        resultsSection.classList.add('hidden');
        document.getElementById('test-form').classList.remove('hidden');
        document.getElementById('test-form').reset();
        current = 0;
        showSection(current);
    });

    function computeResults() {
        // collect by trait
        const questions = Array.from(document.querySelectorAll('.question'));
        const traits = {};
        questions.forEach(q => {
            const trait = q.dataset.trait;
            const qname = q.dataset.q;
            const checked = document.querySelector(`input[name="${qname}"]:checked`);
            const val = checked ? parseInt(checked.value, 10) : 0;
            if (!traits[trait]) traits[trait] = {sum: 0, count: 0};
            traits[trait].sum += val;
            traits[trait].count += 1;
        });

        // Prepare results display
        resultsContent.innerHTML = '';
        for (const [trait, data] of Object.entries(traits)) {
            const avg = data.count ? (data.sum / data.count) : 0;
            const pct = Math.round(((avg - 1) / 4) * 100); // map 1..5 to 0..100
            const row = document.createElement('div');
            row.className = 'result-row';
            row.innerHTML = `
        <div class="result-label"><strong>${trait}</strong></div>
        <div class="bar"><div class="fill" style="width:${pct}%"></div></div>
        <div style="width:48px;text-align:right"><strong>${Math.round(avg * 10) / 10}</strong></div>
      `;
            resultsContent.appendChild(row);

            const desc = document.createElement('p');
            desc.style.margin = '6px 0 12px';
            desc.style.color = '#444';
            desc.textContent = traitDescription(trait, avg);
            resultsContent.appendChild(desc);
        }

        // show results
        document.getElementById('test-form').classList.add('hidden');
        resultsSection.classList.remove('hidden');
        progressBar.style.width = '100%';
    }

    function traitDescription(trait, avg) {
        const v = avg;
        switch (trait) {
            case 'Extraversion':
                return v >= 3.5 ? 'Tienes tendencia a ser sociable y energético.' : v <= 2.5 ? 'Tiendes a ser más reservado y tranquilo.' : 'Muestras rasgos equilibrados de extraversión.';
            case 'Agreeableness':
                return v >= 3.5 ? 'Eres cooperativo y empático con los demás.' : v <= 2.5 ? 'Sueles ser más directo y crítico.' : 'Eres razonablemente amable y cooperador.';
            case 'Conscientiousness':
                return v >= 3.5 ? 'Eres organizado y responsable.' : v <= 2.5 ? 'Sueles preferir flexibilidad sobre la planificación.' : 'Tienes un equilibrio entre disciplina y flexibilidad.';
            case 'Neuroticism':
                return v >= 3.5 ? 'Tiendes a experimentar emociones negativas con más frecuencia.' : v <= 2.5 ? 'Generalmente emocionalmente estable y calmado.' : 'Experimentas nerviosismo ocasional, pero en general estás estable.';
            case 'Openness':
                return v >= 3.5 ? 'Eres curioso y abierto a nuevas experiencias.' : v <= 2.5 ? 'Prefieres lo conocido y lo familiar.' : 'Tienes apertura moderada a nuevas ideas.';
            default:
                return '';
        }
    }

    // initialize
    if (sections.length) showSection(0);
})();
