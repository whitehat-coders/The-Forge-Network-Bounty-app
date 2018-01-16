<div id='fb-root'></div>
       
        <section class='l-row l-row--menu'>
            <div class='l-row__inner'>
                <a href='/' class='c-minimalLogo'>
                    <?php echo $this->Html->image('favicon.png',['class'=>'c-minimalLogo__avatar','width'=>'18','height'=>'18','alt'=>'']); ?>
                    <span class='c-minimalLogo__company'>ForgeNet</span>
                    <span class='c-minimalLogo__tagLine'>Bounty Program</span>
                </a>
            </div>
        </section>
        <section class='l-row l-row--noPadding l-row--fullwidth l-row--dashboard'>
            <div class='l-row__inner'>
                <div class='c-dashboardContent'>
                    <h1 class='c-sectionTitle'>Bounty Dashboard</h1>
                    <ul class='c-dashboardMenu'>
                        <li><a href='dashboard'>Post</a></li>
                        <li><a href='dashboardsettings'>Settings</a></li>
                        <li class='c-dashboardMenu--active'><a href='dashboardearnings'>Earnings</a></li>
                        <li><a href='logout'>Logout</a></li>
                    </ul>
                    <h2>Earnings</h2>
                    <p>All earnings will be sent to your FRG wallet (see <a href='dashboardsettings'>settings</a>).</p>
                     <?php if(!empty($shares)){ ?>
                    <table>
                        <caption>You've earned <code><?php echo $earned;?> FRG</code> in total.</caption>
                        <thead>
                            <tr>
                                <th>Date Time</th>
                                <th>Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($shares as $share){ ?>
                            <tr>
                                <td><?php echo $share['Post']['created']; ?></td>
                                <td>Shared Facebook post</td>
                                <td><?php echo $share['Post']['earned']; ?> FRG</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{?>
                    <p>No activity recorded yet.</p>
                    <?php } ?>
                </div>
                <?php echo $this->Html->image('launch.png',['alt'=>'']); ?>
            </div>
        </section>
        <section class='l-row l-row--footer'>
            <div class='l-row__inner'>
                <div class='l-row--footer__first'>
                    <h2>Early bird sale starting soon</h2>
                    <div class='c-countDown'>
                        <ul class='c-countDown__list'>
                            <li>
                                <span class='c-countDown__value c-countDown__days'></span>
                                <span class='c-countDown__label'>Days</span>
                            </li>
                            <li>
                                <span class='c-countDown__value c-countDown__hours'></span>
                                <span class='c-countDown__label'>Hours</span>
                            </li>
                            <li>
                                <span class='c-countDown__value c-countDown__minutes'></span>
                                <span class='c-countDown__label'>Minutes</span>
                            </li>
                            <li>
                                <span class='c-countDown__value c-countDown__seconds'></span>
                                <span class='c-countDown__label'>Seconds</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='l-row--footer__second'>
                    <div class='c-joinConversation'>
                        <p class='c-joinConversation__label'>Join the conversation:</p>
                        <ul class='c-joinConversation__list'>
                            <li>
                                <a class='c-socialMediaLink c-socialMediaLink--telegram c-socialMediaLink--white' href='https://t.me/ForgeNet' target='_blank' rel='noopener'>
                                    Telegram
                                </a>
                            </li>
                            <li>
                                <a class='c-socialMediaLink c-socialMediaLink--discord c-socialMediaLink--white' href='https://discord.gg/QGrvgKC' target='_blank' rel='noopener'>
                                    Discord
                                </a>
                            </li>
                            <li>
                                <a class='c-socialMediaLink c-socialMediaLink--facebook c-socialMediaLink--white' href='https://www.facebook.com/ForgeNetCoin/' target='_blank' rel='noopener'>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a class='c-socialMediaLink c-socialMediaLink--twitter c-socialMediaLink--white' href='https://twitter.com/forgenetcoin' target='_blank' rel='noopener'>
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a class='c-socialMediaLink c-socialMediaLink--instagram c-socialMediaLink--white' href='https://www.instagram.com/theforgenetwork' target='_blank' rel='noopener'>
                                    Instagram
                                </a>
                            </li>
                            <li>
                                <a class='c-socialMediaLink c-socialMediaLink--reddit c-socialMediaLink--white' href='https://www.reddit.com/r/TheForgeNetwork/' target='_blank' rel='noopener'>
                                    Reddit
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='l-row--footer__third'>
                    <p>Copyright 2018 The Forge Network. All rights reserved.</p>
                </div>
            </div>
        </section>
        <?php echo $this->Html->script('jquery.js');?>
    <?php echo $this->Html->script('countDown.js');?>