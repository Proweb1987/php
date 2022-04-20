<aside class="menu">
            <div class="menu__reviews">
                <span class="menu__reviews_span" data-href="https://proweb.uz/">
                    <i class="far fa-chevron-right"></i>
                </span>
                <span class="menu__reviews_text">Оставить озыв</span>
            </div>
            <ul class="menu__list">
                <?foreach($pages as $link => $data):?>
                    <li>
                        <a href="/?route=<?= $link?>" class="menu__list-link <?= $route == $link  ? 'active' : ''?>">
                            <i class="<?= $data['icon']?>"></i>
                            <?= $data['name']?>
                        </a>
                    </li>
                <?endforeach;?>
            </ul>
</aside>