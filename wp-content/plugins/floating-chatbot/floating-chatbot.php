<?php
/**
 * Plugin Name: Floating Chatbot
 * Description: A floating chatbot added to the bottom-right corner.
 * Version: 1.0
 * Author: Your Name
 */

add_action('wp_footer', 'floating_chatbot_embed');

function floating_chatbot_embed() {
    $plugin_url = plugin_dir_url(__FILE__);
    ?>
    <!-- Chatbot Toggle Button -->
    <div id="chatbot-toggle" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999; cursor: pointer;">
        <img src="<?php echo $plugin_url . 'assets/ai.png'; ?>" alt="Chatbot Icon" style="width: 60px; border-radius: 50%; box-shadow: 0 0 10px black;">
    </div>

    <!-- Hidden Chatbot Window -->
    <div id="chatbot-wrapper" style="display: none; position: fixed; bottom: 90px; right: 20px; width: 350px; height: 500px; z-index: 9998;">
        <iframe src="<?php echo $plugin_url . 'index.html'; ?>" style="width: 100%; height: 100%; border: none; border-radius: 20px; box-shadow: 0 0 20px black;"></iframe>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggle = document.getElementById("chatbot-toggle");
            const wrapper = document.getElementById("chatbot-wrapper");

            toggle.addEventListener("click", () => {
                wrapper.style.display = (wrapper.style.display === "none") ? "block" : "none";
            });
        });
    </script>
    <?php
}
?>
