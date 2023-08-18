<?php
$courses = get_post_meta(get_the_ID(), 'courses_metabox', true);
?>
<div class="accordion-box">
    <ul class="list-unstyled p-0 mt-4">
        <?php $i = 1;
        foreach ($courses as $course) : ?>
            <li class="announce-read mx-2">
                <div class="notif-row">
                    <div class="notif-title">
                        <h2>فصل <?= $i ?></h2>
                    </div>
                    <span class="notif-date">
                        <i class="fa-solid fa-arrow-left"></i>
                    </span>
                </div>
                <div class="notif-content deactive">
                    <div class="card">
                        <?php for ($a = 1; $a <= 5; $a++) :
                            $titleKey = "title_" . $a;
                            $permission_key = "private_course_" . $a;
                            $file_key = "course_file_" . $a;
                            if (isset($course[$titleKey]) && !empty($course[$titleKey])) :
                        ?>
                                <div class='card-item'>
                                    <h2>
                                        <span class="card-item-icon"><i class="fa fa-book"></i></span>
                                        <?= $course[$titleKey] ?>
                                    </h2>
                                    <div class='items-btn'>
                                        <?php if ($course[$permission_key] == false) : ?>
                                            <a class="permission open-course">
                                                <i class='fa-solid fa-open'></i>
                                                پیش نمایش
                                            </a>
                                        <?php else : ?>
                                            <a class="permission close-course">
                                                <i class='fa-solid fa-lock'></i>
                                                خصوصی
                                            </a>
                                        <?php endif ?>
                                        <?php if ($course[$permission_key] == false && isset($course[$file_key])) : ?>
                                            <a class="download-btn" href="<?= $course[$file_key] ?>"><i class="fa-solid fa-download"></i></a>
                                        <?php endif ?>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endfor ?>
                    </div>
                </div>
            </li>
        <?php $i += 1;
        endforeach ?>
    </ul>
</div>