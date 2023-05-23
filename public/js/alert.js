import Swal from 'sweetalert2';

// Fonction pour afficher un message de succès
function showSuccessMessage(message) {
  Swal.fire({
    title: 'Succès!',
    text: message,
    icon: 'success',
    timer: 3000, // Durée d'affichage du pop-up en millisecondes (3 secondes dans cet exemple)
    showConfirmButton: false
  });
}

// Fonction pour afficher un message d'erreur
function showErrorMessage(message) {
  Swal.fire({
    title: 'Erreur!',
    text: message,
    icon: 'error',
    timer: 3000, // Durée d'affichage du pop-up en millisecondes (3 secondes dans cet exemple)
    showConfirmButton: false
  });
}

export { showSuccessMessage, showErrorMessage };
