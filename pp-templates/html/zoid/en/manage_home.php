<div id="zen_content" class="zen_round">

    <div class="zen_pad_more">

        <div id="zen_catalog_left" class="col25l zen_edit_area">
            <h2 class="zen_notopmargin">Navigation</h2>
            {-user_manage_menu-}
        </div>
        <div id="zen_catalog_right" class="col75r zen_edit_area">

            <h1 class="zen_notopmargin">Welcome, %username%!</h1>

            <h2>Video Lesson Library</h2>   

            <?php 
                $api = new WistiaApi('5b6c42dc75a76bdc046f4687f1f8ec6287ca30f32f633bfad24b8748f11ab942');
                if ($api) {
                    $read = $api->accountRead();
                    $projects = $api->projectList();
                    echo '<div class="tile_container">';
                    foreach ($projects as $project) {
                        $videos = $api->mediaList($project->id);
                        $firstvid = $api->mediaShow($videos[0]->id);
                        $thumbnail = $firstvid->thumbnail;
                        echo '<a class="lesson_tile" onclick="loadLesson(' . $project->id . ')">';
                            echo    '<img src="' . $thumbnail->url . '" alt="' . $project->name . '">' . '</img>' .
                                    '<div>' . $project->name . '</div>'; 
                        echo '</a>';
                    }
                    echo '</div>';
                } else {
                    echo '<div>' . 'not cool yo' . '</div>';
                }
            ?>
            
            <div class="zen_clear"></div>

        </div>
        <div class="zen_clear"></div>

    </div>

</div>
	