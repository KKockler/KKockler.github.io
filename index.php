<?php
// Simple, single-file academic homepage for a doctoral student.
// Edit the data arrays below to customize content.

$profile = [
    'name' => 'Konrad Kockler',
    'role' => 'PhD Student in Theoretical Physics',
    'university' => 'Heidelberg University',
    'location' => 'Heidelberg, Germany',
    'email' => 'kockler@thphys.uni-heidelberg.de',
    'website' => 'https://www.thphys.uni-heidelberg.de/~kockler',
    'cv_url' => 'CV_Konrad_Kockler.pdf',
    'photo_url' => 'photo.jpg',
];

$about = [
    'headline' => 'Non-perturbative QCD: phase structure and real-time dynamics',
    'bio' => 'I am a PhD researcher at the Institute for Theoretical Physics, Heidelberg, and a member of the <a href="https://fqcd-collaboration.github.io/" target="_blank" rel="noopener">fQCD collaboration</a>. My work focuses on the phase structure of quantum chromodynamics (QCD) using functional renormalization group methods. By combining Euclidean field theory with real-time dynamics, I construct non-perturbative frameworks that connect equilibrium properties with spectral and dynamical observables, with a particular focus on spectral functions and momentum-dependent truncations.'
];

$research_interests = [
    'QCD phase structure at finite density',
    'Real-time dynamics and spectral functions',
    'Functional renormalization group and non-perturbative methods',
];

$publications = [
    [
        'title' => 'Critical scaling for spectral functions',
        'authors' => 'Konrad Kockler, Jan M. Pawlowski, Jonas Wessely',
        'venue' => 'Eur.Phys.J.C 85 (2025) 9, 950',
        'links' => [
            ['label' => 'doi', 'url' => 'https://doi.org/10.1140/epjc/s10052-025-14679-9'],
            ['label' => 'arxiv', 'url' => 'https://arxiv.org/abs/2506.09142'],
        ],
    ],
    // [
    //     'title' => 'Another Paper or Preprint',
    //     'authors' => 'Your Name, Coauthor C',
    //     'venue' => 'Preprint, 2025',
    //     'links' => [
    //         ['label' => 'PDF', 'url' => '#'],
    //     ],
    // ],
];

$teaching = [
    [
        'course' => 'Introduction to the functional renormalisation group',
        'role' => 'Tutor',
        'term' => 'Summer 2026',
    ],
    [
        'course' => 'Quantum Mechanics',
        'role' => 'Tutor',
        'term' => 'Summer 2025',
    ],
    [
        'course' => 'Higher Mathematics for Physicists III',
        'role' => 'Tutor',
        'term' => 'Winter 2024/25',
    ],
    [
        'course' => 'Higher Mathematics for Physicists II',
        'role' => 'Tutor',
        'term' => 'Summer 2024',
    ],
    [
        'course' => 'Theoretical Electrodynamics',
        'role' => 'Tutor',
        'term' => 'Winter 2023/24',
    ],
];

$service = [
    // 'Reviewer for Conference X and Journal Y',
    // 'Organizer, Lab Reading Group',
];

$news = [
    // 'Mar 2026: Our paper accepted at Conference Z.',
    // 'Jan 2026: Awarded the ABC Doctoral Fellowship.',
];

$links = [
    ['label' => 'arxiv', 'url' => 'https://arxiv.org/search/advanced?advanced=&terms-0-operator=AND&terms-0-term=Kockler%2C+K&terms-0-field=author&classification-physics=y&classification-physics_archives=all&classification-include_cross_list=include&date-filter_by=all_dates&date-year=&date-from_date=&date-to_date=&date-date_type=submitted_date&abstracts=show&size=25&order=-announced_date_first'],
    ['label' => 'Inspire', 'url' => 'https://inspirehep.net/authors/2933795'],
    ['label' => 'ORCID', 'url' => 'https://orcid.org/0009-0001-3897-9707'],
    // ['label' => 'GitHub', 'url' => '#'],
];

function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function h_allow_links($string) {
    return strip_tags($string, '<a>');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo h($profile['name']); ?></title>
    <style>
        :root {
            --bg: #f6f4ef;
            --panel: #ffffff;
            --ink: #1f2430;
            --muted: #586174;
            --accent: #2c6e6b;
            --accent-2: #d48b5f;
            --line: #e0ddd6;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Source Serif 4", "Iowan Old Style", "Times New Roman", serif;
            color: var(--ink);
            background: radial-gradient(circle at 10% 10%, #f2efe8 0%, var(--bg) 55%, #efe9df 100%);
        }

        a { color: var(--accent); text-decoration: none; }
        a:hover { text-decoration: underline; }

        .wrap {
            max-width: 1100px;
            margin: 0 auto;
            padding: 48px 24px 72px;
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(0, 2fr);
            gap: 40px;
        }

        header {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--line);
            padding-bottom: 24px;
        }

        .brand {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .brand .dot {
            width: 14px;
            height: 14px;
            background: var(--accent);
            border-radius: 999px;
            box-shadow: 14px 0 0 var(--accent-2), 28px 0 0 #bfc6be;
        }

        nav a {
            margin-left: 20px;
            font-size: 0.95rem;
            color: var(--muted);
        }

        .card {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 20px 40px rgba(31, 36, 48, 0.06);
        }

        .profile {
            display: grid;
            gap: 18px;
        }

        .profile img {
            width: 100%;
            border-radius: 16px;
            object-fit: cover;
            aspect-ratio: 4 / 5;
            border: 1px solid var(--line);
        }

        .profile h1 {
            margin: 0;
            font-size: 2rem;
        }

        .profile p {
            margin: 0;
            color: var(--muted);
            line-height: 1.5;
        }

        .button-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border-radius: 999px;
            border: 1px solid var(--line);
            font-size: 0.9rem;
            background: #faf9f5;
        }

        .pill strong { color: var(--ink); }

        .hero {
            padding: 32px 32px 28px;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            display: none;
            content: "";
            position: absolute;
            inset: -20% 10% auto auto;
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(44, 110, 107, 0.18) 0%, rgba(44, 110, 107, 0) 70%);
            pointer-events: none;
        }

        .hero h2 {
            font-size: 2.2rem;
            margin: 0 0 12px;
        }

        .hero p {
            margin: 0 0 16px;
            color: var(--muted);
            line-height: 1.7;
        }

        section h3 {
            margin-top: 0;
            font-size: 1.2rem;
        }

        .list {
            margin: 0;
            padding-left: 18px;
            color: var(--muted);
            line-height: 1.7;
        }

        .pub {
            border-top: 1px solid var(--line);
            padding-top: 18px;
            margin-top: 18px;
        }

        .pub:first-child {
            border-top: none;
            padding-top: 0;
            margin-top: 0;
        }

        .pub h4 {
            margin: 0 0 6px;
            font-size: 1rem;
        }

        .pub p {
            margin: 0 0 8px;
            color: var(--muted);
        }

        .link-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .link-row a {
            font-size: 0.9rem;
            border-bottom: 1px solid transparent;
        }

        .link-row a:hover { border-bottom-color: var(--accent); }

        .grid {
            display: grid;
            gap: 20px;
        }

        footer {
            grid-column: 1 / -1;
            text-align: center;
            color: var(--muted);
            margin-top: 20px;
        }

        @media (max-width: 900px) {
            .wrap {
                grid-template-columns: 1fr;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <div class="brand">
                <div class="dot"></div>
                <strong>Academic Profile</strong>
            </div>
            <nav>
                <a href="#research">Research</a>
                <a href="#publications">Publications</a>
                <a href="#teaching">Teaching</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>

        <aside class="card profile">
            <img src="<?php echo h($profile['photo_url']); ?>" alt="Portrait of <?php echo h($profile['name']); ?>" />
            <div>
                <h1><?php echo h($profile['name']); ?></h1>
                <p><?php echo h($profile['role']); ?></p>
                <p><?php echo h($profile['university']); ?></p>
                <p><?php echo h($profile['location']); ?></p>
            </div>
            <div class="button-row">
                <span class="pill"><strong>Email</strong> <?php echo h($profile['email']); ?></span>
                <a class="pill" href="<?php echo h($profile['cv_url']); ?>">Download CV</a>
                <a class="pill" href="<?php echo h($profile['website']); ?>">Personal Website</a>
            </div>
            <div class="link-row">
                <?php foreach ($links as $link): ?>
                    <a href="<?php echo h($link['url']); ?>"><?php echo h($link['label']); ?></a>
                <?php endforeach; ?>
            </div>
        </aside>

        <main class="grid">
            <section class="card hero">
                <h2><?php echo h($about['headline']); ?></h2>
                <p><?php echo h_allow_links($about['bio']); ?></p>
                <div class="button-row">
                    <span class="pill">Currently: Dissertation research</span>
                    <span class="pill">Open to collaborations</span>
                </div>
            </section>

            <section id="research" class="card">
                <h3>Research Interests</h3>
                <ul class="list">
                    <?php foreach ($research_interests as $interest): ?>
                        <li><?php echo h($interest); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section id="publications" class="card">
                <h3>Publications</h3>
                <?php foreach ($publications as $pub): ?>
                    <div class="pub">
                        <h4><?php echo h($pub['title']); ?></h4>
                        <p><?php echo h($pub['authors']); ?></p>
                        <p><?php echo h($pub['venue']); ?></p>
                        <div class="link-row">
                            <?php foreach ($pub['links'] as $link): ?>
                                <a href="<?php echo h($link['url']); ?>"><?php echo h($link['label']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>

            <section id="teaching" class="card">
                <h3>Teaching</h3>
                <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));">
                    <div>
                        <!-- <h4>Teaching</h4> -->
                        <?php foreach ($teaching as $item): ?>
                            <p style="margin: 0 0 10px; color: var(--muted);">
                                <strong><?php echo h($item['course']); ?></strong><br />
                                <?php echo h($item['role']); ?> &middot; <?php echo h($item['term']); ?>
                            </p>
                        <?php endforeach; ?>
                    </div>
                    <!-- <div>
                        <h4>Service</h4>
                        <ul class="list">
                            <?php foreach ($service as $item): ?>
                                <li><?php echo h($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div>
                        <h4>News</h4>
                        <ul class="list">
                            <?php foreach ($news as $item): ?>
                                <li><?php echo h($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div> -->
                </div>
            </section>

            <section id="contact" class="card">
                <h3>Contact</h3>
                <p style="margin: 0; color: var(--muted);">
                    Philosophenweg 16<br>
                    69120 Heidelberg <br><br>

                    E-mail:     kockler@thphys.uni-heidelberg.de<br>
                    Phone:      +49-6221-54 9404<br>
                    Room:       10 
                    <!-- The best way to reach me is via email at
                    <a href="mailto:<?php echo h($profile['email']); ?>"><?php echo h($profile['email']); ?></a>.
                    You can also find me in the Philosophenweg 16 building of the ITP. -->
                </p>
            </section>
        </main>

        <footer>
            &copy; <?php echo date('Y'); ?> <?php echo h($profile['name']); ?>. Built with PHP.
        </footer>
    </div>
</body>
</html>
