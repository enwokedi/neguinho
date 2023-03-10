import './bootstrap';

import './templatemo';

import '../css/app.css';

import '../css/fontawesome.css';

import '../css/slick-theme.css';

import '../css/templatemo.css';

import Alpine from 'alpinejs';

import.meta.glob([
    '../images/**',
    '../webfonts/**',
]);

window.Alpine = Alpine;

Alpine.start();
