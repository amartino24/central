<?php
defined('ABSPATH') || exit;

if (version_compare(phpversion(), '5.3', '<')) {
    return;
}

class NewsletterWidgetMinimal extends WP_Widget {

    function __construct() {
        parent::__construct(false, $name = 'Newsletter Minimal', array('description' => 'Newsletter widget to add a minimal subscription form'), array('width' => '350px'));
    }

    function widget($args, $instance) {

        $newsletter = Newsletter::instance();
        $current_language = $newsletter->get_current_language();

        extract($args);

        echo $before_widget;

        if (!is_array($instance)) {
            $instance = array();
        }
        // Filters are used for WPML
        if (!empty($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title'], $instance);
            echo $before_title . $title . $after_title;
        }

        $options_profile = NewsletterSubscription::instance()->get_options('profile', $current_language);

        if (empty($instance['button'])) {
            $instance['button'] = $options_profile['subscribe'];
        }

        $form = '<div class="tnp tnp-widget-minimal">';
        $form .= '<form class="tnp-form" action="' . $newsletter->build_action_url('s') . '" method="post">';
        if (isset($instance['nl']) && is_array($instance['nl'])) {
            foreach ($instance['nl'] as $a) {
                $form .= "<input type='hidden' name='nl[]' value='" . ((int) trim($a)) . "'>\n";
            }
        }
        // Referrer
        $form .= '<input type="hidden" name="nr" value="widget-minimal"/>';
        $form .= '
        <div class="newsletter-input-container flex a-center"><svg xmlns="http://www.w3.org/2000/svg" width="23.785" height="18.8" viewBox="0 0 23.785 18.8">
                    <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(-1.607 -5)">
            <path id="Trazado_142" data-name="Trazado 142"
                d="M5.1,6H21.9A2.106,2.106,0,0,1,24,8.1V20.7a2.106,2.106,0,0,1-2.1,2.1H5.1A2.106,2.106,0,0,1,3,20.7V8.1A2.106,2.106,0,0,1,5.1,6Z"
                fill="none" stroke="#2680eb" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" />
            <path id="Trazado_143" data-name="Trazado 143" d="M24,9,13.5,16.35,3,9"
                transform="translate(0 -0.9)" fill="none" stroke="#2680eb" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" />
            </g>
        </svg>';
        $form .= '<input class="tnp-email" type="email" required name="ne" value="" placeholder="' . esc_attr($options_profile['email']) . '"> </div>';

        $form .= '<button class="radius-button suscribirse-button tnp-submit" type="submit" value="' . esc_attr($instance['button']) . '">';
        $form .= 'ENVIAR <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711"><path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(-7.875 -11.252)" fill="#2680eb"></path></svg>';
        $form .= '</button>';
        $form .= '</form></div>';

        echo $form;
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    function form($instance) {
        if (!is_array($instance)) {
            $instance = array();
        }
        $newsletter = Newsletter::instance();
        $current_language = $newsletter->get_current_language();
        $profile_options = NewsletterSubscription::instance()->get_options('profile', $current_language);
        $instance = array_merge(array('title' => '', 'text' => '', 'button' => $profile_options['subscribe'], 'nl' => array()), $instance);
        if (!is_array($instance['nl'])) {
            $instance['nl'] = array();
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                Title:
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>">
            </label>

            <label for="<?php echo $this->get_field_id('button'); ?>">
                Button label:
                <input class="widefat" id="<?php echo $this->get_field_id('button'); ?>" name="<?php echo $this->get_field_name('button'); ?>" type="text" value="<?php echo esc_attr($instance['button']); ?>">
                Use a short one!
            </label>
        </p>

        <p>
            <?php _e('Automatically subscribe to', 'newsletter') ?>
            <br>
             <?php
            $lists = Newsletter::instance()->get_lists_public();
            foreach ($lists as $list) {
                ?>
                <label for="nl<?php echo $list->id ?>">
                    <input type="checkbox" value="<?php echo $list->id ?>" name="<?php echo $this->get_field_name('nl[]') ?>" <?php echo array_search($list->id, $instance['nl']) !== false ? 'checked' : '' ?>> <?php echo esc_html($list->name) ?>
                </label>
                <br>
            <?php } ?>
        </p>

        <?php
    }

}

add_action('widgets_init', function() {
    return register_widget("NewsletterWidgetMinimal");
});
