import axios from 'axios';
import Alpine from 'alpinejs';
import Precognition from 'laravel-precognition-alpine';

window.axios = axios;
window.Alpine = Alpine;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Alpine.plugin(Precognition);
Alpine.start();
