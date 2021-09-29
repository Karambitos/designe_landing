/**
 *  Load modules
 */
import echo from './modules/echo.js';
import './modules/slider.js';
import './modules/anchor.js';
import './modules/header-scroll.js';
import './modules/form.js';
import './modules/main.js';

import '../scss/app.scss';

$(document).ready(() => {
  echo('App ready');
});
