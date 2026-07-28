<?php require_once "../_partials/_head.php" ?>

<!-- ═══════════════════════════════════════════ -->
<!-- SECTION 1 : ABOUT / PROFIL -->
<!-- ═══════════════════════════════════════════ -->
<section id="profil" class="relative min-h-screen flex items-center px-6 md:px-20 py-32">
    <div class="max-w-2xl ml-auto w-full">

        <p data-animate data-delay="0" class="font-mono text-sm text-cyan-400/70 mb-4 translate-x-8 opacity-0 transition-all duration-500 is-visible">
            <span class="text-cyan-300">$</span> whoami
        </p>

        <h1 data-animate data-delay="0.1"
            class="font-mono text-4xl md:text-6xl font-bold text-white mb-3 uppercase tracking-wider text-glow-cyan translate-x-8 opacity-0 transition-all duration-500">
            Morgan Gardès
        </h1>

        <p data-animate data-delay="0.2"
           class="font-mono text-cyan-300 text-lg mb-8 tracking-wide translate-x-8 opacity-0 transition-all duration-500">
            &gt; Développeur Web
        </p>

        <div data-animate data-delay="0.3"
             class="space-y-5 border-l-2 border-cyan-400/30 pl-6 translate-x-8 opacity-0 transition-all duration-500">
            <p class="text-lg leading-relaxed text-slate-300">
                Passionné par le développement web, je transforme des idées en
                expériences numériques fluides et performantes. Mon terrain de jeu :
                l'intersection entre un code propre et un design immersif.
            </p>
            <p class="text-lg leading-relaxed text-slate-400">
                Curieux de nature, je plonge constamment dans de nouvelles
                technologies pour repousser les frontières du possible sur le web.
                Chaque projet est une exploration vers plus de profondeur et de
                précision.
            </p>
        </div>

        <div data-animate data-delay="0.5"
             class="mt-8 flex flex-wrap gap-3 translate-x-8 opacity-0 transition-all duration-500">
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">Frontend</span>
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">UI/UX</span>
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">Performance</span>
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">Responsive</span>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════ -->
<!-- SECTION 2 : COMPÉTENCES / SKILLS -->
<!-- ═══════════════════════════════════════════ -->
<section id="competences" class="relative px-6 md:px-20 py-32">
    <div class="text-center mb-16">
        <p class="font-mono text-sm text-cyan-400/70 mb-2">// 02</p>
        <h2 class="font-mono text-3xl md:text-5xl font-bold text-white uppercase tracking-wider">
            Compétences
        </h2>
    </div>

    <!-- Bouton CV -->
    <div class="flex justify-center mb-20">
        <a href="#"
           class="group relative inline-flex items-center gap-3 px-8 py-4 rounded-full border border-cyan-400/50 bg-cyan-400/5 hover:bg-cyan-400/15 transition-colors">
            <!-- Icône Download SVG -->
            <svg class="w-5 h-5 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                <polyline points="7 10 12 15 17 10"/>
                <line x1="12" y1="15" x2="12" y2="3"/>
            </svg>
            <span class="font-mono text-sm text-cyan-100 tracking-wide">Télécharger mon CV</span>
            <span class="absolute inset-0 rounded-full border border-cyan-400/30 animate-ping opacity-25"></span>
        </a>
    </div>

    <!-- Bulles de compétences -->
    <div class="flex flex-wrap justify-center gap-5 md:gap-8 max-w-4xl mx-auto">
        <?php
        $skills = [
            ['name' => 'HTML5', 'color' => '#E34F26'],
            ['name' => 'CSS3', 'color' => '#1572B6'],
            ['name' => 'JavaScript', 'color' => '#F7DF1E'],
            ['name' => 'TailwindCSS', 'color' => '#06B6D4'],
            ['name' => 'Git', 'color' => '#F05032'],
            ['name' => 'Figma', 'color' => '#F24E1E'],
            ['name' => 'React', 'color' => '#61DAFB'],
            ['name' => 'Node.js', 'color' => '#339933'],
        ];
        foreach ($skills as $index => $skill):
            $color = $skill['color'];
        ?>
        <div class="skill-bubble relative w-28 h-28 md:w-32 md:h-32 flex-shrink-0 flex items-center justify-center cursor-pointer">
            <!-- Bulle -->
            <div class="absolute inset-0 rounded-full flex items-center justify-center backdrop-blur-md border border-white/25 transition-transform duration-200 hover:scale-110"
                 style="background: radial-gradient(circle at 35% 30%, rgba(255,255,255,0.18), rgba(255,255,255,0.04) 60%, transparent), <?= $color ?>15;
                        box-shadow: inset 0 0 25px <?= $color ?>40, 0 0 30px <?= $color ?>25;">
                <span class="font-mono text-xs md:text-sm font-medium text-center px-2 text-white/90"
                      style="text-shadow: 0 0 12px <?= $color ?>;">
                    <?= $skill['name'] ?>
                </span>
                <span class="absolute top-2.5 left-4 w-5 h-5 rounded-full bg-white/40 blur-[3px]"></span>
            </div>
            <!-- Conteneur particules (rempli par JS) -->
            <div class="bubble-particles absolute inset-0 pointer-events-none"></div>
        </div>
        <?php endforeach; ?>
    </div>

    <p class="text-center mt-12 text-xs text-slate-500 font-mono">
        // Cliquez sur une bulle pour la faire éclater
    </p>
</section>

<!-- ═══════════════════════════════════════════ -->
<!-- SECTION 3 : PROJETS -->
<!-- ═══════════════════════════════════════════ -->
<section id="projets" class="relative px-6 md:px-20 py-32">
    <div class="text-center mb-16">
        <p class="font-mono text-sm text-cyan-400/70 mb-2">// 03</p>
        <h2 class="font-mono text-3xl md:text-5xl font-bold text-white uppercase tracking-wider">
            Projets
        </h2>
        <p class="mt-4 text-slate-400 max-w-md mx-auto">
            Survolez un viewport pour explorer l'intégralité du site.
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <?php
        $projects = [
            [
                'title' => 'Abyss Store',
                'desc' => 'E-commerce immersif avec paiement intégré et catalogue dynamique.',
                'tags' => ['React', 'Stripe', 'Tailwind'],
                'img' => 'https://placehold.co/600x800/0f6274/5fe6f8?text=Abyss+Store',
            ],
            [
                'title' => 'DeepMetrics',
                'desc' => 'Dashboard analytics temps réel avec visualisations de données.',
                'tags' => ['React', 'Recharts', 'Node'],
                'img' => 'https://placehold.co/600x800/0f6274/5fe6f8?text=DeepMetrics',
            ],
            [
                'title' => 'Voyage Bleu',
                'desc' => 'Application de réservation de voyages, design fluide océanique.',
                'tags' => ['React', 'Map', 'API'],
                'img' => 'https://placehold.co/600x800/0f6274/5fe6f8?text=Voyage+Bleu',
            ],
        ];
        foreach ($projects as $index => $project):
        ?>
        <div data-animate data-delay="<?= $index * 0.1 ?>"
             class="group relative rounded-2xl overflow-hidden border border-cyan-400/15 glass hover:border-cyan-400/40 transition-colors translate-y-8 opacity-0 transition-all duration-700 hover:-translate-y-2">
            <div class="relative aspect-[3/4] overflow-hidden">
                <div class="w-full h-full transition-transform duration-[2500ms] ease-out group-hover:scale-150">
                    <img src="<?= $project['img'] ?>" alt="Screenshot du projet <?= $project['title'] ?>" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#020812] pointer-events-none"></div>
                <div class="absolute inset-2 rounded-xl border-2 border-cyan-400/0 group-hover:border-cyan-400/30 transition-colors pointer-events-none"></div>
                <div class="absolute top-3 right-3 w-9 h-9 rounded-full flex items-center justify-center bg-[#020812]/70 border border-cyan-400/30 opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-4 h-4 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                        <polyline points="15 3 21 3 21 9"/>
                        <line x1="10" y1="14" x2="21" y2="3"/>
                    </svg>
                </div>
            </div>
            <div class="p-5">
                <h3 class="font-mono text-lg text-white mb-1"><?= $project['title'] ?></h3>
                <p class="text-sm text-slate-400 mb-3"><?= $project['desc'] ?></p>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($project['tags'] as $tag): ?>
                    <span class="font-mono text-[10px] px-2 py-1 rounded-full border border-cyan-400/20 text-cyan-300/80"><?= $tag ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ═══════════════════════════════════════════ -->
<!-- SECTION 4 : CONTACT -->
<!-- ═══════════════════════════════════════════ -->
<section id="contact" class="relative px-6 md:px-20 py-32">
    <div class="text-center mb-16">
        <p class="font-mono text-sm text-cyan-400/70 mb-2">// 04</p>
        <h2 class="font-mono text-3xl md:text-5xl font-bold text-white uppercase tracking-wider">
            Contact
        </h2>
        <p class="mt-4 text-slate-400 max-w-md mx-auto">
            Coordonnées transmises en profondeur. Établissez le signal.
        </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
        <?php
        $contacts = [
            ['icon' => 'phone', 'label' => 'Téléphone', 'value' => '+33 6 12 34 56 78', 'href' => 'tel:+33612345678'],
            ['icon' => 'mail', 'label' => 'Email', 'value' => 'morgan.gardes@email.com', 'href' => 'mailto:morgan.gardes@email.com'],
            ['icon' => 'linkedin', 'label' => 'LinkedIn', 'value' => '/in/morgan-gardes', 'href' => '#'],
            ['icon' => 'github', 'label' => 'GitHub', 'value' => '@morgangardes19-ai', 'href' => 'https://github.com/morgangardes19-ai'],
            ['icon' => 'discord', 'label' => 'Discord', 'value' => 'morgan.gardes', 'href' => '#'],
            ['icon' => 'map', 'label' => 'Localisation', 'value' => 'France', 'href' => '#'],
        ];

        function renderIcon($icon) {
            switch ($icon) {
                case 'phone':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>';
                case 'mail':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>';
                case 'linkedin':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>';
                case 'github':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>';
                case 'discord':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03z"/></svg>';
                case 'map':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>';
                default:
                    return '';
            }
        }

        foreach ($contacts as $index => $contact):
        ?>
        <a href="<?= $contact['href'] ?>"
           target="<?= str_starts_with($contact['href'], 'http') ? '_blank' : '' ?>"
           rel="<?= str_starts_with($contact['href'], 'http') ? 'noopener noreferrer' : '' ?>"
           data-animate data-delay="<?= $index * 0.08 ?>"
           class="group relative flex flex-col items-center gap-4 p-8 rounded-2xl border border-cyan-400/15 glass hover:border-cyan-400/50 transition-colors translate-y-4 opacity-0 transition-all duration-500 hover:-translate-y-1.5">

            <span class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity bg-cyan-400/5"></span>
            <span class="relative w-16 h-16 rounded-full flex items-center justify-center border border-cyan-400/30 bg-cyan-400/5 group-hover:shadow-[0_0_25px_rgba(0,240,255,0.4)] transition-shadow">
                <?= renderIcon($contact['icon']) ?>
            </span>
            <span class="relative font-mono text-xs text-cyan-400/60 uppercase tracking-wider"><?= $contact['label'] ?></span>
            <span class="relative text-sm text-slate-200 text-center break-all"><?= $contact['value'] ?></span>
        </a>
        <?php endforeach; ?>
    </div>

    <div class="mt-20 text-center">
        <p class="font-mono text-xs text-slate-500 tracking-widest uppercase">
            Submerged Logic — <?= date('Y') ?>
        </p>
    </div>
</section>

<?php require_once "../_partials/_footer.php" ?>