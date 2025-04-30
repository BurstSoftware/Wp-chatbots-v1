function chatbot_enqueue_scripts() {
    wp_enqueue_script('chatbot-js', plugin_dir_url(__FILE__) . 'js/chatbot.js', array('jquery'), '1.0', true);
    wp_enqueue_style('chatbot-css', plugin_dir_url(__FILE__) . 'css/chatbot.css');
}
add_action('wp_enqueue_scripts', 'chatbot_enqueue_scripts');

function chatbot_html() {
    echo '<div id="chatbot-container">
            <div id="chatbot-messages"></div>
            <input type="text" id="chatbot-input" placeholder="Type your message...">
            <button id="chatbot-send">Send</button>
          </div>';
}
add_action('wp_footer', 'chatbot_html');
