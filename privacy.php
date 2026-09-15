<?php require __DIR__ . '/assets/inc/asset-version.php'; ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KORAXX — Politique de confidentialité</title>
  <meta name="description" content="Comment KORAXX collecte, utilise et protège vos données personnelles." />
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
<body data-i18n-page="privacyPage">
  <header class="site-header" data-site-header>
    <div class="container">
      <a href="/" class="brand" aria-label="KORAXX">
        <img class="lockup-light" src="assets/brand/wordmark-light.png" alt="KORAXX" />
        <img class="lockup-dark" src="assets/brand/wordmark-dark.png" alt="KORAXX" />
      </a>
      <div class="header-actions">
        <button type="button" class="icon-btn" data-theme-toggle aria-pressed="false" aria-label="Changer le thème">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path></svg>
        </button>
        <div class="lang-menu">
          <button type="button" class="icon-btn" data-lang-toggle aria-label="Changer la langue">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 0 1 0 20 15 15 0 0 1 0-20z"></path></svg>
          </button>
          <div class="lang-menu-panel glass" data-lang-menu-panel role="menu"></div>
        </div>
      </div>
    </div>
  </header>

  <main id="main">
    <section class="legal-page">
      <div class="container">
        <a href="/" class="legal-back">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"></path></svg>
          <span data-i18n="legalPage.back">Retour à l'accueil</span>
        </a>

        <h1 data-i18n="privacyPage.title">Politique de confidentialité</h1>
        <p class="legal-updated" data-i18n="privacyPage.updated">Dernière mise à jour : 15 septembre 2026</p>

        <div class="legal-content">
          <p data-i18n-html="privacyPage.intro">Cette politique explique quelles données KORAXX collecte lorsque vous utilisez notre site et notre application, pourquoi nous les collectons, et les droits dont vous disposez. Ce document couvre à la fois <strong>koraxx.fr</strong> (ce site) et <strong>app.koraxx.fr</strong> (l'application).</p>

          <h2 data-i18n="privacyPage.s1Title">1. Qui est responsable de vos données</h2>
          <p data-i18n-html="privacyPage.s1Body"><span class="legal-placeholder">[Nom de l'entité légale]</span>, <span class="legal-placeholder">[forme juridique, ex. SASU]</span> immatriculée sous le numéro <span class="legal-placeholder">[SIRET / n° d'immatriculation]</span>, dont le siège est situé <span class="legal-placeholder">[adresse enregistrée]</span>, est responsable du traitement de vos données au sens du Règlement général sur la protection des données (RGPD).</p>

          <h2 data-i18n="privacyPage.s2Title">2. Les données que nous collectons</h2>
          <p data-i18n="privacyPage.s2Intro">Lorsque vous créez un compte et utilisez l'application, nous collectons :</p>
          <ul data-i18n-html="privacyPage.s2List">
            <li><strong>Informations de compte</strong> : nom, adresse e-mail, mot de passe (stocké sous forme chiffrée), photo de profil si vous en ajoutez une.</li>
            <li><strong>Contenu de votre espace de travail</strong> : profils d'artistes, dossiers de presse (EPK) et leur contenu (biographies, musique, photos, vidéos, documents), contacts que vous enregistrez.</li>
            <li><strong>Informations d'équipe</strong> : adresses e-mail des membres que vous invitez et leur rôle.</li>
            <li><strong>Informations de facturation</strong> : votre plan d'abonnement et son statut. Les numéros de carte bancaire ne transitent jamais par nos serveurs — ils sont traités directement par notre prestataire de paiement, Stripe.</li>
          </ul>
          <p data-i18n="privacyPage.s2Visitor">Lorsqu'une personne consulte un EPK publié que vous avez créé, nous collectons également des données sur ce visiteur, pour vous fournir des statistiques : un identifiant anonymisé (haché) du visiteur, le pays et le type d'appareil approximatifs, le site référent, ainsi que les vues et téléchargements. Nous ne stockons pas l'adresse IP brute des visiteurs.</p>

          <h2 data-i18n="privacyPage.s3Title">3. Pourquoi nous utilisons ces données</h2>
          <ul data-i18n-html="privacyPage.s3List">
            <li>Fournir, maintenir et sécuriser le service (créer votre compte, afficher vos EPK, gérer les accès de votre équipe).</li>
            <li>Traiter les paiements et gérer votre abonnement.</li>
            <li>Vous envoyer les e-mails nécessaires au fonctionnement du service (confirmation de compte, notifications d'activité, informations de facturation).</li>
            <li>Produire les statistiques de consultation de vos EPK.</li>
            <li>Répondre à vos demandes lorsque vous nous contactez.</li>
          </ul>

          <h2 data-i18n="privacyPage.s4Title">4. Avec qui nous partageons ces données</h2>
          <p data-i18n="privacyPage.s4Intro">Nous ne vendons aucune donnée. Nous faisons appel à un nombre limité de sous-traitants pour faire fonctionner le service :</p>
          <ul data-i18n-html="privacyPage.s4List">
            <li><strong>Stripe</strong>, pour le traitement des paiements et la facturation.</li>
            <li><strong>Notre hébergeur</strong>, pour le stockage des données et des fichiers.</li>
          </ul>
          <p data-i18n="privacyPage.s4Outro">Ces prestataires n'ont accès qu'aux données strictement nécessaires à l'exécution de leur mission et sont eux-mêmes tenus à des obligations de confidentialité.</p>

          <h2 data-i18n="privacyPage.s5Title">5. Cookies et technologies similaires</h2>
          <p data-i18n-html="privacyPage.s5Body">Le détail des cookies et technologies de stockage utilisés par koraxx.fr et par l'application figure dans notre <a href="/cookies">politique relative aux cookies</a>.</p>

          <h2 data-i18n="privacyPage.s6Title">6. Durée de conservation</h2>
          <p data-i18n="privacyPage.s6Body">Nous conservons vos données tant que votre compte est actif. Si vous supprimez votre compte, vos données personnelles et le contenu de votre espace de travail sont supprimés dans un délai raisonnable, sauf obligation légale de conservation plus longue (notamment les données de facturation).</p>

          <h2 data-i18n="privacyPage.s7Title">7. Vos droits</h2>
          <p data-i18n="privacyPage.s7Body">Conformément au RGPD, vous disposez d'un droit d'accès, de rectification, d'effacement, de limitation, d'opposition et de portabilité de vos données. Vous pouvez exercer ces droits directement depuis les paramètres de votre compte, ou en nous contactant à l'adresse ci-dessous. Vous pouvez également introduire une réclamation auprès de la CNIL.</p>

          <h2 data-i18n="privacyPage.s8Title">8. Sécurité</h2>
          <p data-i18n="privacyPage.s8Body">Vos mots de passe sont stockés sous forme chiffrée. Les communications entre votre navigateur et nos serveurs sont chiffrées (HTTPS). L'accès aux données de production est limité aux personnes qui en ont besoin pour faire fonctionner le service.</p>

          <h2 data-i18n="privacyPage.s9Title">9. Modifications de cette politique</h2>
          <p data-i18n="privacyPage.s9Body">Nous pouvons mettre à jour cette politique de temps à autre. La date de dernière mise à jour figure en haut de cette page. En cas de changement significatif, nous vous en informerons par e-mail ou via l'application.</p>

          <h2 data-i18n="privacyPage.s10Title">10. Nous contacter</h2>
          <p data-i18n-html="privacyPage.s10Body">Pour toute question sur cette politique ou pour exercer vos droits, écrivez-nous à <span class="legal-placeholder">[privacy@koraxx.fr]</span>.</p>
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
          <p data-i18n="footer.tagline">La plateforme de promotion musicale pour créer, personnaliser et partager votre dossier de presse électronique.</p>
        </div>
        <div class="footer-links">
          <div class="footer-col">
            <h4 data-i18n="footer.product">Produit</h4>
            <ul>
              <li><a href="/#features" data-i18n="footer.linkFeatures">Fonctionnalités</a></li>
              <li><a href="/#pricing" data-i18n="footer.linkPricing">Tarifs</a></li>
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
          <button type="button" class="icon-btn" data-theme-toggle aria-pressed="false" aria-label="Changer le thème">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path></svg>
          </button>
          <div class="lang-menu">
            <button type="button" class="icon-btn" data-lang-toggle aria-label="Changer la langue">
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
