<div class="wrap">
    <h1>DeelLevel Settings</h1>


    <form action="" method="post" class="adminform_ajax">
        <?
            $output = get_option( 'deeplevel_core_settings' );

            // DLC\Api\SettingsApiPlugin::vardump( $output );
        ?>

        <div class="wrap__container">
            <div class="wrap__column">
                <h2>Modules</h2>

                <table class="form-table" role="presentation">
                    <tbody>
                        <?
                            $modules_array = [
                                [ 'title' => 'Outdated Browser', 'name' => 'outdatedbrowser' ],
                                [ 'title' => 'Lozad (Lazy Load)', 'name' => 'lozad' ],
                                [ 'title' => 'Swiper Slider', 'name' => 'swiper_slider' ],
                                [ 'title' => 'Typographer', 'name' => 'typographer' ],
                                [ 'title' => 'Mixitup', 'name' => 'mixitup' ],
                                [ 'title' => 'Mixitup Multifilter', 'name' => 'mixitup_multifilter' ],
                                [ 'title' => 'Mixitup Pagination', 'name' => 'mixitup_pagination' ],
                                [ 'title' => 'TWBS navwalker', 'name' => 'navwalker' ],
                                [ 'title' => 'Masked input', 'name' => 'maskedinput' ],
                                [ 'title' => 'Fancybox 3', 'name' => 'fancybox' ],
                            ];

                            foreach ( $modules_array as $key => $value ) {
                        ?>
                             <tr class="form-group ui-toggle">
                                <th scope="row">
                                    <div class="form-status">
                                        <label><?= $value[ 'title' ]?></label>
                                        <div class="spinner"></div>
                                        <div class="status">Saved.</div>
                                    </div>
                                </th>
                                <td>
                                    <div class="ajax_checkboxes">
                                        <div class="ui-toggle">
                                            <input type="checkbox" id="<?= $value[ 'name' ]?>" name="<?= $value[ 'name' ]?>" value="1" class="go_ajax" <?= $output[ $value[ 'name' ] ] ? 'checked' : '' ?> >
                                            <label for="<?= $value[ 'name' ]?>">
                                                <div></div>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?}?>

                    </tbody>
                </table>

            </div>

            <div class="wrap__column">
                <h2>TWBS</h2>

                <table class="form-table" role="presentation">
                    <tbody>
                        <?
                            $twbs_array = [
                                [ 'title' => 'Alert', 'name' => 'twbs_alert' ],
                                [ 'title' => 'Tab', 'name' => 'twbs_tab' ],
                                [ 'title' => 'Collapse', 'name' => 'twbs_collapse' ],
                                [ 'title' => 'Dropdown', 'name' => 'twbs_dropdown' ],
                                [ 'title' => 'Modal', 'name' => 'twbs_modal' ],
                                [ 'title' => 'Toast', 'name' => 'twbs_toast' ],
                            ];

                            foreach ( $twbs_array as $key => $value ) {
                        ?>
                             <tr class="form-group ui-toggle">
                                <th scope="row">
                                    <div class="form-status">
                                        <label><?= $value[ 'title' ]?></label>
                                        <div class="spinner"></div>
                                        <div class="status">Saved.</div>
                                    </div>
                                </th>
                                <td>
                                    <div class="ajax_checkboxes">
                                        <div class="ui-toggle">
                                            <input type="checkbox" id="<?= $value[ 'name' ]?>" name="<?= $value[ 'name' ]?>" value="1" class="go_ajax" <?= $output[ $value[ 'name' ] ] ? 'checked' : '' ?> >
                                            <label for="<?= $value[ 'name' ]?>">
                                                <div></div>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?}?>
                    </tbody>
                </table>
            </div>

            <div class="wrap__column">
                <h2>Additional</h2>

                <table class="form-table" role="presentation">
                    <tbody>
                        <?
                            $additional_array = [
                                [ 'title' => 'Kama Excerpt', 'name' => 'kama_excerpt' ],
                            ];

                            foreach ( $additional_array as $key => $value ) {
                        ?>
                             <tr class="form-group ui-toggle">
                                <th scope="row">
                                    <div class="form-status">
                                        <label><?= $value[ 'title' ]?></label>
                                        <div class="spinner"></div>
                                        <div class="status">Saved.</div>
                                    </div>
                                </th>
                                <td>
                                    <div class="ajax_checkboxes">
                                        <div class="ui-toggle">
                                            <input type="checkbox" id="<?= $value[ 'name' ]?>" name="<?= $value[ 'name' ]?>" value="1" class="go_ajax" <?= $output[ $value[ 'name' ] ] ? 'checked' : '' ?> >
                                            <label for="<?= $value[ 'name' ]?>">
                                                <div></div>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?}?>
                    </tbody>
                </table>
            </div>

        </div>

        <input type="hidden" name="action" value="edit_setting_plugin">
        <input type="hidden" name="nonce" value="<?= wp_create_nonce('edit_setting_plugin_nonce'); ?>">
        <div class="response"></div>
    </form>

</div>