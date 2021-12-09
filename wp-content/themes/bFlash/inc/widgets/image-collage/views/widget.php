<?php 
    echo $title;
?>
                    <ul class="vk-list vk-latest-news">
                        <?php 
                            if($instance['collage_images'] != ''){

                                foreach (json_decode($instance['collage_images']) as  $attachment_id) {
                                    $image_url = wp_get_attachment_image_src($attachment_id, 'thumb99');
                                    printf('<li class="vk-img-frame">
                                                <a href="#" class="vk-img">
                                                    <img src="%s" alt="">
                                                </a>
                                            </li>', $image_url[0]);
                                }
                            }
                        ?>
</ul>