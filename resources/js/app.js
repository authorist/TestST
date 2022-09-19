import './bootstrap';




// Uncaught ReferenceError: $ is not defined  bu hatayı verdiği için jquery cdn olarak ekledim buradaki herhalde reference alamıyor
//require('jquery');
import 'jquery';  
import $ from 'jquery';
window.JQuery = $;
window.$ = $



import Alpine from 'alpinejs';
window.Alpine = Alpine;

Alpine.start();


