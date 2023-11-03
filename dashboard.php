<?php
/*
Template Name: Dashboard
*/
get_template_part('header-dashboard');
?>

<div class="container-fluid">
    <div class="row">
    <?php get_template_part('template/sidebar'); ?>
      <!-- Add an empty div for the registered content -->
      <div id="registered-content" style="display: none;"></div>

    </div>
    <!-- In dashboard.php -->

   

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Your existing JavaScript code to handle the "Registered" link click
    const registeredLink = document.getElementById('registered-link');
    const registeredContentContainer = document.getElementById('registered-content');

    registeredLink.addEventListener('click', function(event) {
        event.preventDefault();

        // Check if the content is already loaded; if not, load it
        if (!registeredContentContainer.innerHTML) {
            // Use AJAX or fetch to load the content of registered.php
            fetch('/wp-content/themes/livesay-child/template/admin/event-registered.php') // Update with your actual path
                .then(response => response.text()
                )
                .then(data => {
                    // Insert the content into the container
                    console.log(data);
                    registeredContentContainer.innerHTML = data;
                    // Show the content container
                    registeredContentContainer.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error loading content:', error);
                });
        } else {
            // If content is already loaded, just show it
            registeredContentContainer.style.display = 'block';
        }
    });

    // Add similar event listeners for other sidebar options here
});
</script>




<?php get_template_part('footer-dashboard'); ?>