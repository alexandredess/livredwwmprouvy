import { Application } from '@hotwired/stimulus';
import { definitionsFromContext } from '@hotwired/stimulus-webpack-helpers';

// Démarre l'application Stimulus
const app = Application.start();

// Enregistre tes contrôleurs personnalisés ici
// app.register('some_controller_name', SomeImportedController);