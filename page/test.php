
        <main class="main">
            
            <?
                $name = 'qwerty';
            ?>
            <?if($name == 'proweb'):?>
            <h1><?= $name ?></h1>
            <?else:?>
            <h1>Ваш сайт на php и в переменной $name лежит: <?= $name?>  </h1>
            <?endif;?>

            <?
                $array = ['cobalt','gentra','nexia','spark','damas'];
                $countries = [
                    'uzb' => ['plov','gm','somsa','summ'],
                    'russia' => ['putin','vodka','medved','balalayka'],
                    'usa' => ['dollar','google','new york','miami']
                ];
            ?>

            <?for($i = 0; $i < count($array);$i++):?>
                <h2><?= $array[$i] ?></h2>
            <?endfor;?>
            <hr>

            <?foreach($countries as $country => $info):?>
                <ul>
                    <h2><?= $country ?></h2>
                    <?foreach($info as $key => $data):?>
                            <li><?= $data ?></li>
                    <?endforeach;?>
                </ul>
            <?endforeach;?>

            <form>
                <p>Выберите год рождения</p>
                <select>
                    <?for($i = date('Y') - 60; $i <= date('Y');$i++):?>
                        <option><?= $i ?></option>
                    <?endfor;?>
                </select>
            </form>
            <h1><?= date('d-m-Y H:i:s')?></h1>

            <?
                var_dump($countries);
            ?>
        </main>
