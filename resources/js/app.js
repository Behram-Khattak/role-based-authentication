import './bootstrap';
import 'flowbite';

import { library } from '@fortawesome/fontawesome-svg-core';

import {fas} from '@fortawesome/free-solid-svg-icons';
import {far} from '@fortawesome/free-regular-svg-icons';
import {fab} from '@fortawesome/free-brands-svg-icons';

library.add(fas, far, fab);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
