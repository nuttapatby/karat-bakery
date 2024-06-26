require('./bootstrap');
import '@fortawesome/fontawesome-free/js/all'
import 'jquery/dist/jquery'


import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
$('.datepicker').datepicker();
