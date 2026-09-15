(() => {
  'use strict';

  const THEME_KEY = 'koraxx-landing-theme';
  const LANG_KEY = 'koraxx-landing-lang';
  const CONSENT_KEY = 'koraxx-landing-cookie-consent';
  const SUPPORTED_LANGS = ['en', 'fr', 'ar', 'es', 'pt', 'de', 'zh'];
  const RTL_LANGS = ['ar'];
  const LANG_NAMES = {
    en: 'English',
    fr: 'Français',
    ar: 'العربية',
    es: 'Español',
    pt: 'Português',
    de: 'Deutsch',
    zh: '中文',
  };

  const root = document.documentElement;
  const i18nCache = {};

  // ---------------------------------------------------------------------
  // Theme
  // ---------------------------------------------------------------------

  function getPreferredTheme() {
    const stored = localStorage.getItem(THEME_KEY);
    if (stored === 'light' || stored === 'dark') return stored;
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  }

  function applyTheme(theme) {
    root.classList.toggle('dark', theme === 'dark');
    document.querySelectorAll('[data-theme-toggle]').forEach((btn) => {
      btn.setAttribute('aria-pressed', theme === 'dark' ? 'true' : 'false');
    });
  }

  function initTheme() {
    applyTheme(getPreferredTheme());
    document.querySelectorAll('[data-theme-toggle]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const next = root.classList.contains('dark') ? 'light' : 'dark';
        localStorage.setItem(THEME_KEY, next);
        applyTheme(next);
      });
    });
  }

  // ---------------------------------------------------------------------
  // i18n
  // ---------------------------------------------------------------------

  function detectInitialLang() {
    const stored = localStorage.getItem(LANG_KEY);
    if (stored && SUPPORTED_LANGS.includes(stored)) return stored;
    const nav = (navigator.language || 'fr').slice(0, 2).toLowerCase();
    return SUPPORTED_LANGS.includes(nav) ? nav : 'fr';
  }

  function loadDict(lang) {
    if (i18nCache[lang]) return i18nCache[lang];
    const dict = (window.KORAXX_I18N && window.KORAXX_I18N[lang]) || {};
    i18nCache[lang] = dict;
    return dict;
  }

  function resolveKey(dict, key) {
    return key.split('.').reduce((acc, part) => (acc && typeof acc === 'object' ? acc[part] : undefined), dict);
  }

  function applyDict(dict) {
    document.querySelectorAll('[data-i18n]').forEach((el) => {
      const value = resolveKey(dict, el.getAttribute('data-i18n'));
      if (typeof value === 'string') el.textContent = value;
    });
    document.querySelectorAll('[data-i18n-html]').forEach((el) => {
      const value = resolveKey(dict, el.getAttribute('data-i18n-html'));
      if (typeof value === 'string') el.innerHTML = value;
    });
    document.querySelectorAll('[data-i18n-attr]').forEach((el) => {
      el.getAttribute('data-i18n-attr')
        .split('|')
        .forEach((pair) => {
          const [attr, key] = pair.split(':');
          const value = resolveKey(dict, key);
          if (typeof value === 'string') el.setAttribute(attr, value);
        });
    });
    if (dict.meta) {
      if (dict.meta.title) document.title = dict.meta.title;
      const desc = document.querySelector('meta[name="description"]');
      if (desc && dict.meta.description) desc.setAttribute('content', dict.meta.description);
    }
  }

  function updateLangUI(lang) {
    document.querySelectorAll('[data-lang-option]').forEach((btn) => {
      const isCurrent = btn.getAttribute('data-lang-option') === lang;
      btn.setAttribute('aria-current', isCurrent ? 'true' : 'false');
    });
    document.querySelectorAll('[data-current-lang-label]').forEach((el) => {
      el.textContent = LANG_NAMES[lang] || lang.toUpperCase();
    });
  }

  async function setLang(lang) {
    if (!SUPPORTED_LANGS.includes(lang)) return;
    root.lang = lang;
    root.dir = RTL_LANGS.includes(lang) ? 'rtl' : 'ltr';
    localStorage.setItem(LANG_KEY, lang);
    const dict = await loadDict(lang);
    applyDict(dict);
    updateLangUI(lang);
  }

  function buildLangMenus() {
    document.querySelectorAll('[data-lang-menu-panel]').forEach((panel) => {
      panel.innerHTML = '';
      SUPPORTED_LANGS.forEach((lang) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.setAttribute('data-lang-option', lang);
        btn.setAttribute('role', 'menuitem');
        btn.innerHTML = `<span>${LANG_NAMES[lang]}</span>`;
        btn.addEventListener('click', () => {
          setLang(lang);
          panel.classList.remove('is-open');
        });
        panel.appendChild(btn);
      });
    });
  }

  function initLangMenus() {
    document.querySelectorAll('[data-lang-toggle]').forEach((toggle) => {
      const panel = toggle.parentElement.querySelector('[data-lang-menu-panel]');
      if (!panel) return;
      toggle.addEventListener('click', (event) => {
        event.stopPropagation();
        const willOpen = !panel.classList.contains('is-open');
        document.querySelectorAll('[data-lang-menu-panel]').forEach((p) => p.classList.remove('is-open'));
        panel.classList.toggle('is-open', willOpen);
      });
    });
    document.addEventListener('click', () => {
      document.querySelectorAll('[data-lang-menu-panel]').forEach((p) => p.classList.remove('is-open'));
    });
  }

  async function initI18n() {
    buildLangMenus();
    initLangMenus();
    await setLang(detectInitialLang());
  }

  // ---------------------------------------------------------------------
  // Mobile menu
  // ---------------------------------------------------------------------

  function initMobileMenu() {
    const menu = document.querySelector('[data-mobile-menu]');
    if (!menu) return;
    const openBtns = document.querySelectorAll('[data-mobile-menu-open]');
    const closeBtns = menu.querySelectorAll('[data-mobile-menu-close]');

    function open() {
      menu.classList.add('is-open');
      document.body.style.overflow = 'hidden';
      openBtns.forEach((b) => b.setAttribute('aria-expanded', 'true'));
    }

    function close() {
      menu.classList.remove('is-open');
      document.body.style.overflow = '';
      openBtns.forEach((b) => b.setAttribute('aria-expanded', 'false'));
    }

    openBtns.forEach((btn) => btn.addEventListener('click', open));
    closeBtns.forEach((btn) => btn.addEventListener('click', close));
    menu.querySelectorAll('nav a').forEach((link) => link.addEventListener('click', close));
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') close();
    });
  }

  // ---------------------------------------------------------------------
  // Scroll progress + sticky header state + scroll-to-top
  // ---------------------------------------------------------------------

  function initScrollEffects() {
    const progress = document.querySelector('[data-scroll-progress]');
    const header = document.querySelector('[data-site-header]');
    const topBtn = document.querySelector('[data-scroll-top]');

    function onScroll() {
      const scrollTop = window.scrollY || document.documentElement.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const pct = height > 0 ? Math.min(scrollTop / height, 1) : 0;

      if (progress) progress.style.transform = `scaleX(${pct})`;
      if (header) header.classList.toggle('is-scrolled', scrollTop > 8);
      if (topBtn) topBtn.classList.toggle('is-visible', scrollTop > 500);
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    if (topBtn) {
      topBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    }
  }

  // ---------------------------------------------------------------------
  // Cookie banner
  // ---------------------------------------------------------------------

  function initCookieBanner() {
    const banner = document.querySelector('[data-cookie-banner]');
    if (!banner) return;
    const consent = localStorage.getItem(CONSENT_KEY);
    if (!consent) {
      window.setTimeout(() => banner.classList.add('is-visible'), 400);
    }
    banner.querySelectorAll('[data-cookie-accept], [data-cookie-decline]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const value = btn.hasAttribute('data-cookie-accept') ? 'accepted' : 'declined';
        localStorage.setItem(CONSENT_KEY, value);
        banner.classList.remove('is-visible');
      });
    });
  }

  // ---------------------------------------------------------------------
  // Boot
  // ---------------------------------------------------------------------

  document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initI18n();
    initMobileMenu();
    initScrollEffects();
    initCookieBanner();
  });
})();
