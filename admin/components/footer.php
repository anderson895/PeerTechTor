 <!-- Main Content goes here -->
 </main>
</div>











<!-- Optional: Material Icons CDN for icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="assets/js/app.js"></script>
<script src="assets/js/report_notification.js"></script>





<script>
  
  
  const overlay = document.getElementById('overlay');


  menuButton.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
  });



  overlay.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
  });
</script>
</body>
</html>