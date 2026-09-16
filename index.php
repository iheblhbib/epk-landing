<?php require __DIR__ . '/assets/inc/asset-version.php'; ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KORAXX — Créez et partagez l'EPK de votre artiste</title>
  <meta name="description" content="KORAXX est la plateforme pour créer, personnaliser et partager le dossier de press électronique (EPK) de votre artiste. Essai gratuit de 14 jours." />
  <link rel="icon" href="assets/brand/mark.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= koraxx_asset_url('assets/css/styles.css') ?>" />
  <script>
    (function () {
      try {
        var t = localStorage.getItem('koraxx-landing-theme');
        if (!t) t = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        if (t === 'dark') document.documentElement.classList.add('dark');
      } catch (e) {}
    })();
  </script>
</head>
<body>
  <a class="visually-hidden" href="#main" data-i18n="skipLink">Aller au contenu principal</a>

  <div class="scroll-progress" data-scroll-progress></div>

  <header class="site-header" data-site-header>
    <div class="container">
      <a href="/" class="brand" aria-label="KORAXX">
        <img class="lockup-light" src="assets/brand/wordmark-light.png" alt="KORAXX" />
        <img class="lockup-dark" src="assets/brand/wordmark-dark.png" alt="KORAXX" />
      </a>

      <nav class="nav-links" aria-label="Navigation principale">
        <a href="#how-it-works" data-i18n="nav.howItWorks">Comment ça marche</a>
        <a href="#features" data-i18n="nav.features">Fonctionnalités</a>
        <a href="#pricing" data-i18n="nav.pricing">Tarifs</a>
      </nav>

      <div class="header-actions">
        <button type="button" class="icon-btn" data-theme-toggle aria-pressed="false" data-i18n-attr="aria-label:nav.toggleTheme">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path></svg>
        </button>

        <div class="lang-menu">
          <button type="button" class="icon-btn" data-lang-toggle data-i18n-attr="aria-label:nav.toggleLanguage">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 0 1 0 20 15 15 0 0 1 0-20z"></path></svg>
          </button>
          <div class="lang-menu-panel glass" data-lang-menu-panel role="menu"></div>
        </div>

        <a href="https://app.koraxx.fr/login" class="btn btn-ghost" data-i18n="nav.login">Se connecter</a>
        <a href="https://app.koraxx.fr/register" class="btn btn-primary" data-i18n="nav.signup">Essayer gratuitement</a>

        <button type="button" class="icon-btn menu-toggle" data-mobile-menu-open aria-expanded="false" aria-controls="mobile-menu" data-i18n-attr="aria-label:nav.openMenu">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18"></path></svg>
        </button>
      </div>
    </div>
  </header>

  <div class="mobile-menu" id="mobile-menu" data-mobile-menu>
    <div class="mobile-menu-backdrop" data-mobile-menu-close></div>
    <div class="mobile-menu-panel">
      <div class="mobile-menu-top">
        <a href="/" class="brand" aria-label="KORAXX">
          <img class="lockup-light" src="assets/brand/wordmark-light.png" alt="KORAXX" />
          <img class="lockup-dark" src="assets/brand/wordmark-dark.png" alt="KORAXX" />
        </a>
        <button type="button" class="icon-btn" data-mobile-menu-close data-i18n-attr="aria-label:nav.closeMenu">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"></path></svg>
        </button>
      </div>
      <nav aria-label="Navigation mobile">
        <a href="#how-it-works" data-i18n="nav.howItWorks">Comment ça marche</a>
        <a href="#features" data-i18n="nav.features">Fonctionnalités</a>
        <a href="#pricing" data-i18n="nav.pricing">Tarifs</a>
      </nav>
      <div class="mobile-menu-footer">
        <a href="https://app.koraxx.fr/login" class="btn btn-ghost" data-i18n="nav.login">Se connecter</a>
        <a href="https://app.koraxx.fr/register" class="btn btn-primary" data-i18n="nav.signup">Essayer gratuitement</a>
      </div>
    </div>
  </div>

  <main id="main">
    <!-- Hero -->
    <section class="hero">
      <div class="orb-field"><div class="orb orb-1"></div><div class="orb orb-2"></div></div>
      <div class="container">
        <div class="hero-copy">
          <span class="hero-badge" data-i18n="hero.badge">Nouveau · Créez votre EPK en quelques minutes</span>
          <h1>
            <span data-i18n="hero.titleStart">Votre dossier de press,</span>
            <span class="accent" data-i18n="hero.titleAccent">prêt à être vu.</span>
          </h1>
          <p class="lead" data-i18n="hero.lead">Créez, personnalisez et partagez l'EPK de votre groupe en quelques minutes.</p>
          <div class="hero-ctas">
            <a href="https://app.koraxx.fr/register" class="btn btn-primary btn-lg" data-i18n="hero.ctaPrimary">Créer mon compte</a>
            <a href="https://app.koraxx.fr/login" class="btn btn-ghost btn-lg" data-i18n="hero.ctaSecondary">Se connecter</a>
          </div>
          <p class="hero-fineprint" data-i18n="hero.fineprint">14 jours d'essai gratuit · Aucune carte requise</p>
        </div>

        <div class="hero-visual">
          <div class="mock-frame glass-strong">
            <div class="mock-topbar">
              <span class="mock-dot"></span><span class="mock-dot"></span><span class="mock-dot"></span>
            </div>
            <div class="mock-card">
              <div class="mock-avatar"></div>
              <div class="mock-line w-60"></div>
              <div class="mock-line w-40"></div>
              <div class="mock-stats">
                <div class="mock-stat"><strong>12.4k</strong><span data-i18n="hero.mockStat1">Vues</span></div>
                <div class="mock-stat"><strong>860</strong><span data-i18n="hero.mockStat2">Téléchargements</span></div>
                <div class="mock-stat"><strong>24</strong><span data-i18n="hero.mockStat3">Pays</span></div>
              </div>
            </div>
          </div>
          <div class="laminate" aria-hidden="true">
            <div class="laminate-hole"></div>
            <div class="laminate-stripe"></div>
            <div class="laminate-label">KORAXX EPK</div>
            <div class="laminate-sub">ALL ACCESS</div>
            <div class="laminate-code">NO. 2026-0142</div>
          </div>
        </div>
      </div>
    </section>

    <!-- How it works -->
    <section id="how-it-works" class="section-pad">
      <div class="container">
        <div class="section-head">
          <h2 data-i18n="steps.title">De l'idée au partage, en trois étapes</h2>
          <p data-i18n="steps.lead">Aucune compétence technique requise.</p>
        </div>
        <div class="steps">
          <div class="step-card glass">
            <span class="step-number">1</span>
            <h3 data-i18n="steps.step1Title">Créez votre fiche</h3>
            <p data-i18n="steps.step1Body">Renseignez le profil de l'artiste : bio, genre, liens, contacts.</p>
          </div>
          <div class="step-card glass">
            <span class="step-number">2</span>
            <h3 data-i18n="steps.step2Title">Construisez votre EPK</h3>
            <p data-i18n="steps.step2Body">Ajoutez des sections par glisser-déposer : musique, photos, press, crédits.</p>
          </div>
          <div class="step-card glass">
            <span class="step-number">3</span>
            <h3 data-i18n="steps.step3Title">Partagez-le</h3>
            <p data-i18n="steps.step3Body">Lien public, lien privé protégé par mot de passe, ou domaine personnalisé.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section id="features" class="section-pad">
      <div class="container">
        <div class="section-head">
          <h2 data-i18n="features.title">Tout ce qu'il faut pour votre promotion</h2>
          <p data-i18n="features.lead">Conçu spécifiquement pour les artistes, labels et managers.</p>
        </div>
        <div class="tracklist">
          <div class="track-row">
            <span class="track-number">01</span>
            <h3 class="track-title" data-i18n="features.f1Title">Éditeur de sections</h3>
            <p class="track-body" data-i18n="features.f1Body">Glissez-déposez des sections (musique, photos, vidéos, press) et personnalisez le thème.</p>
          </div>
          <div class="track-row">
            <span class="track-number">02</span>
            <h3 class="track-title" data-i18n="features.f2Title">Bibliothèque média</h3>
            <p class="track-body" data-i18n="features.f2Body">Centralisez photos, visuels et documents pour tous vos EPKs.</p>
          </div>
          <div class="track-row">
            <span class="track-number">03</span>
            <h3 class="track-title" data-i18n="features.f3Title">Statistiques en temps réel</h3>
            <p class="track-body" data-i18n="features.f3Body">Suivez les vues, téléchargements et pays de vos visiteurs.</p>
          </div>
          <div class="track-row">
            <span class="track-number">04</span>
            <h3 class="track-title" data-i18n="features.f4Title">Liens privés protégés</h3>
            <p class="track-body" data-i18n="features.f4Body">Partagez un EPK non publié avec un mot de passe et une date d'expiration.</p>
          </div>
          <div class="track-row">
            <span class="track-number">05</span>
            <h3 class="track-title" data-i18n="features.f5Title">Domaine personnalisé</h3>
            <p class="track-body" data-i18n="features.f5Body">Connectez votre propre nom de domaine à votre EPK.</p>
          </div>
          <div class="track-row">
            <span class="track-number">06</span>
            <h3 class="track-title" data-i18n="features.f6Title">Équipe & rôles</h3>
            <p class="track-body" data-i18n="features.f6Body">Invitez votre équipe avec des rôles précis : admin, éditeur, lecteur.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Showcase -->
    <section class="section-pad">
      <div class="container">
        <div class="section-head">
          <h2 data-i18n="showcase.title">Une vue d'ensemble claire de votre promotion</h2>
          <p data-i18n="showcase.lead">Vues, téléchargements, top EPK et pays d'origine — tout au même endroit.</p>
        </div>
        <div class="showcase-panel glass-strong">
          <div class="showcase-mock">
            <div class="mock-topbar">
              <span class="mock-dot"></span><span class="mock-dot"></span><span class="mock-dot"></span>
            </div>
            <div class="showcase-body">
              <div class="mock-stat"><strong>12</strong><span data-i18n="showcase.statTotal">EPK au total</span></div>
              <div class="mock-stat"><strong>8</strong><span data-i18n="showcase.statPublished">EPK publiés</span></div>
              <div class="mock-stat"><strong>48.2k</strong><span data-i18n="showcase.statViews">Vues totales</span></div>
              <div class="mock-stat"><strong>3.1k</strong><span data-i18n="showcase.statDownloads">Téléchargements</span></div>
              <div class="showcase-chart" aria-hidden="true">
                <span style="height: 35%;"></span><span style="height: 55%;"></span><span style="height: 40%;"></span>
                <span style="height: 70%;"></span><span style="height: 50%;"></span><span style="height: 85%;"></span>
                <span style="height: 60%;"></span><span style="height: 95%;"></span><span style="height: 75%;"></span>
                <span style="height: 65%;"></span><span style="height: 90%;"></span><span style="height: 80%;"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="section-pad">
      <div class="container">
        <div class="section-head">
          <h2 data-i18n="pricing.title">Un plan pour chaque étape</h2>
          <p data-i18n="pricing.lead">14 jours d'essai gratuit sur tous les plans. Aucune carte requise.</p>
        </div>
        <div class="pricing-grid">
          <div class="price-card glass">
            <h3 data-i18n="pricing.starterName">Starter</h3>
            <p style="color: var(--muted-foreground); font-size: 0.9rem;" data-i18n="pricing.starterDesc">Pour démarrer avec un artiste.</p>
            <div class="price-amount"><strong>6,66&nbsp;€</strong><span data-i18n="pricing.perMonth">/ mois</span></div>
            <ul class="price-features">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.starterF1">1 EPK</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.starterF2">1 artiste</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.starterF3">2 membres d'équipe</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.starterF4">150 Mo de stockage</span></li>
            </ul>
            <a href="https://app.koraxx.fr/register" class="btn btn-ghost" data-i18n="pricing.ctaStarter">Commencer</a>
          </div>

          <div class="price-card glass featured">
            <span class="price-badge" data-i18n="pricing.popular">Le plus populaire</span>
            <h3 data-i18n="pricing.proName">Pro</h3>
            <p style="color: var(--muted-foreground); font-size: 0.9rem;" data-i18n="pricing.proDesc">Pour les artistes en pleine croissance.</p>
            <div class="price-amount"><strong>26,66&nbsp;€</strong><span data-i18n="pricing.perMonth">/ mois</span></div>
            <ul class="price-features">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.proF1">5 EPK</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.proF2">5 artistes</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.proF3">10 membres d'équipe</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.proF4">2 Go de stockage</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.proF5">Thèmes personnalisés</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.proF6">Liens privés protégés</span></li>
            </ul>
            <a href="https://app.koraxx.fr/register" class="btn btn-primary" data-i18n="pricing.ctaPro">Commencer</a>
          </div>

          <div class="price-card glass">
            <h3 data-i18n="pricing.businessName">Business</h3>
            <p style="color: var(--muted-foreground); font-size: 0.9rem;" data-i18n="pricing.businessDesc">Pour les labels et agences.</p>
            <div class="price-amount"><strong>99,99&nbsp;€</strong><span data-i18n="pricing.perMonth">/ mois</span></div>
            <ul class="price-features">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.businessF1">EPK illimités</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.businessF2">Artistes illimités</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.businessF3">Équipe illimitée</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.businessF4">20 Go de stockage</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.businessF5">Domaine personnalisé</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg><span data-i18n="pricing.businessF6">Marque blanche</span></li>
            </ul>
            <a href="https://app.koraxx.fr/register" class="btn btn-ghost" data-i18n="pricing.ctaBusiness">Nous contacter</a>
          </div>
        </div>
        <p class="pricing-note" data-i18n="pricing.note">Facturation annuelle disponible avec une remise. Les prix sont en euros, TTC.</p>
      </div>
    </section>

    <!-- Final CTA -->
    <section class="section-pad">
      <div class="container">
        <div class="final-cta glass-strong">
          <div class="orb-field"><div class="orb orb-3"></div></div>
          <h2 data-i18n="cta.title">Prêt à créer votre premier EPK ?</h2>
          <p data-i18n="cta.lead">Rejoignez KORAXX et donnez à votre musique la vitrine qu'elle mérite.</p>
          <div class="hero-ctas">
            <a href="https://app.koraxx.fr/register" class="btn btn-primary btn-lg" data-i18n="cta.primary">Créer mon compte gratuitement</a>
            <a href="https://app.koraxx.fr/login" class="btn btn-ghost btn-lg" data-i18n="cta.secondary">Se connecter</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <a href="/" class="brand" aria-label="KORAXX">
            <img class="lockup-light" src="assets/brand/lockup-light.png" alt="KORAXX" />
            <img class="lockup-dark" src="assets/brand/lockup-dark.png" alt="KORAXX" />
          </a>
          <p data-i18n="footer.tagline">La plateforme de promotion musicale pour créer, personnaliser et partager votre dossier de press électronique.</p>
        </div>
        <div class="footer-links">
          <div class="footer-col">
            <h4 data-i18n="footer.product">Produit</h4>
            <ul>
              <li><a href="#features" data-i18n="footer.linkFeatures">Fonctionnalités</a></li>
              <li><a href="#pricing" data-i18n="footer.linkPricing">Tarifs</a></li>
              <li><a href="https://app.koraxx.fr/login" data-i18n="footer.linkLogin">Se connecter</a></li>
              <li><a href="https://app.koraxx.fr/register" data-i18n="footer.linkSignup">Créer un compte</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4 data-i18n="footer.company">Application</h4>
            <ul>
              <li><a href="https://app.koraxx.fr" data-i18n="footer.linkApp">Accéder à l'application</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4 data-i18n="footer.legal">Légal</h4>
            <ul>
              <li><a href="/privacy" data-i18n="footer.linkPrivacy">Confidentialité</a></li>
              <li><a href="/terms" data-i18n="footer.linkTerms">Conditions d'utilisation</a></li>
              <li><a href="/cookies" data-i18n="footer.linkCookies">Cookies</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <span data-i18n="footer.copyright">© 2026 KORAXX. Tous droits réservés.</span>
        <div class="footer-controls">
          <button type="button" class="icon-btn" data-theme-toggle aria-pressed="false" data-i18n-attr="aria-label:nav.toggleTheme">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path></svg>
          </button>
          <div class="lang-menu">
            <button type="button" class="icon-btn" data-lang-toggle data-i18n-attr="aria-label:nav.toggleLanguage">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 0 1 0 20 15 15 0 0 1 0-20z"></path></svg>
            </button>
            <div class="lang-menu-panel glass" data-lang-menu-panel role="menu"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <button type="button" class="scroll-top-btn" data-scroll-top aria-label="Haut de page">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5M5 12l7-7 7 7"></path></svg>
  </button>

  <div class="cookie-banner" data-cookie-banner>
    <div class="cookie-banner-card glass-strong">
      <div class="cookie-banner-text">
        <strong data-i18n="cookie.title">Votre vie privée</strong>
        <span data-i18n="cookie.body">Ce site utilise uniquement des cookies fonctionnels pour mémoriser vos préférences de thème et de langue. Aucun cookie de suivi ou publicitaire n'est utilisé.</span>
      </div>
      <div class="cookie-banner-actions">
        <button type="button" class="btn btn-ghost" data-cookie-decline data-i18n="cookie.decline">Refuser</button>
        <button type="button" class="btn btn-primary" data-cookie-accept data-i18n="cookie.accept">Accepter</button>
      </div>
    </div>
  </div>

  <script src="<?= koraxx_asset_url('assets/js/i18n-data.js') ?>"></script>
  <script src="<?= koraxx_asset_url('assets/js/app.js') ?>" defer></script>
</body>
</html>
