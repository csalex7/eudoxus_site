<?php
include_once '../Config.php';
include('../partials/header.php');
include('../partials/footer.html');
?>
<link href="../css/publisher.css" rel="stylesheet">


<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/eudoxus_site/index.php">Αρχική</a></li>
    <li class="breadcrumb-item"><a href="student.php">Φοιτητής</a></li>
    <li class="breadcrumb-item active" aria-current="page">Βοήθεια</li>
  </ol>
</nav>

<h3>Διαδικασία Εγγραφής Φοιτητών</h3>
<p>Κάθε φοιτητής αρχικά θα πρέπει να εγγραφεί και να πιστοποιηθεί προκειμένου να αποκτήσει πρόσβαση στον ΕΥΔΟΞΟ, μέσω μιας απλής διαδικασίας, από την <a href="/eudoxus_site/signup.php" target="_blank">ιστοδελίδα εγγραφής</a>.</p>

<a href="#" class="clickable_help" onclick="toggle_visibility('hidden_help');">Οδηγίες σύνδεσης</a>
<div style="display: none;" id="hidden_help">
Αν δεν έχετε δημιουργήσει λογαριασμό,<a href="/eudoxus_site/signup.php" target="_blank">Δημιουργήστε λογαριασμό φοιτητή</a></br>
Για να συνδεθείτε,μεταβείτε στην <a href="/eudoxus_site/login.php" target="_blank">σελίδα εγγραφής</a></br>
</div>
<h3>Διαδικασία Δήλωσης Συγγραμμάτων</h3>
<p>Κάθε φοιτητής αφού συνδεθεί στο σύστημα έχει την δυνατότητα δήλωσης των επιθυμητών συγγραμμάτων για κάθε μάθημα μέσω της <a href="/eudoxus_site/student/declaration.php" target="_blank">Δήλωσης Συγγραμμάτων</a>. </p>
<a href="#" class="clickable_help" onclick="toggle_visibility('hidden_help2');">Οδηγίες Δήλωσης Συγγραμμάτων</a>
<div style="display: none;" id="hidden_help2">
<ol>
  <li>Συνδεθείτε στο σύστημα χρησιμοποιώντας το username και το password που δηλώσατε κατά την εγγραφή σας</li>
  <li>Μεταβείτε στην <a href="/eudoxus_site/student/declaration.php" target="_blank">Δημιουργία νέας δήλωσης</a></li>
  <li>Επιλέξτε το ίδρυμα φοίτησης</li>
  <li>Επιλέξτε το εξάμηνο που σας ενδιαφέρει</li>
  <li>Επιλέξτε το επιθυμητό σύγγραμμα για κάθε ένα από τα μαθήματα του τρέχοντος εξαμήνου</li>
  <li>Πατήστε την <strong>Υποβολή Δήλωσης</strong> για να οριστικοποιήσετε την δήλωση σας</li>
</ol> 
</div>

<h3>Διαδικασία Τροποποίησης Δήλωσης</h3>
<p>Σε περίπτωση που θέλετε να τροποποιήσετε την δήλωση σας για το τρέχον εξάμηνο,έχετε την δυνατότητα να αλλάξετε μια ή περισσότερες από τις επιλογές σας μέσω της <a href="/eudoxus_site/student/edit_declaration.php" target="_blank">Τροποποίησης Δήλωσης</a>. </p>
<a href="#" class="clickable_help" onclick="toggle_visibility('hidden_help3');">Οδηγίες Τροποποίησης Δήλωσης</a>
<div style="display: none;" id="hidden_help3">
<ol>
  <li>Συνδεθείτε στο σύστημα χρησιμοποιώντας το username και το password που δηλώσατε κατά την εγγραφή σας</li>
  <li>Μεταβείτε στην <a href="/eudoxus_site/student/edit_declaration.php" target="_blank">Τροποποίηση Δήλωσης</a></li>
  <li>Πατήστε την επιλογή <strong>Αλλαγή Συγγράμματος</strong>κάτω από το βιβλίο που θέλετε να αλλάξετε</li>
  <li>Επιλέξτε το επιθυμητό σύγγραμμα από την λίστα των διαθέσιμων και πατήστε <strong>Δήλωση Βιβλίου</strong></li>
</ol> 
</div>

<h3>Προβολή Λίστας Συγγραμμάτων</h3>
<p>Η ιστοσελίδα του ΕΥΔΟΞΟΥ παρέχει την δυνατότητα σε κάθε φοιτητή της προβολής των συγγραμμάτων που έχει δηλώσει και έχει αποκτήσει μέσω του πρόγραμμα του ΕΥΔΟΞΟΥ μέσω της <a href="/eudoxus_site/student/book_list.php" target="_blank">Λίστας Συγγραμμάτων</a>.</p>

<h3>Ανταλλαγή Συγγραμμάτων</h3>
<p>Η ιστοσελίδα του ΕΥΔΟΞΟΥ παρέχει την δυνατότητα σε κάθε φοιτητή να δηλώσει κάποιο σύγγραμμα που έχει αποκτήσει μέσω του ΕΥΔΟΞΟΥ και δεν χρειάζεται πλέον για ανταλλαγή,μέσω της<a href="/eudoxus_site/student/trade_books.php" target="_blank">Ανταλλαγής Συγγραμμάτων</a>.</p>
<a href="#" class="clickable_help" onclick="toggle_visibility('hidden_help4');">Οδηγίες Δήλωσης Συγγραμμάτων</a>
<div style="display: none;" id="hidden_help4">
<ol>
  <li>Συνδεθείτε στο σύστημα χρησιμοποιώντας το username και το password που δηλώσατε κατά την εγγραφή σας</li>
  <li>Μεταβείτε στην <a href="/eudoxus_site/student/trade_books.php" target="_blank">Δημιουργία νέας δήλωσης</a></li>
  <li>Επιλέξτε το επιθυμητό σύγγραμμα για ανταλλαγή</li>
  <li>Πατήστε την <strong>Δήλωση Συγγράμματος για Aνταλλαγή</strong> για να οριστικοποιήσετε την δήλωση σας</li>
</ol> 
</div>

<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>
