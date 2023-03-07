import './bootstrap';

import './templatemo';

import './custom'

import '../css/app.css';

import '../css/custom.css';

import '../css/fontawesome.css';

import '../css/slick-theme.css';

import '../css/templatemo.css';

import Alpine from 'alpinejs';

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

window.Alpine = Alpine;

Alpine.start();
