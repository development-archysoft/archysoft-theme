<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="technology <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <?php if (get_sub_field("block_aske_title")) : ?>
                <h2 class="services_title">
                    <?php the_sub_field("block_aske_title"); ?>
                </h2>
        <?php endif; ?>
        <?php if (get_sub_field("technology_stack_prev")) : ?>
                <p class="services_desc">
                    <?php the_sub_field("technology_stack_prev"); ?>
                </p>
        <?php endif; ?>
    <div class="technology_wrapper">
        <?php $selected_options = get_sub_field('technology_stack_item'); ?> 
        <div class="technology_wrapper_btns">
                <?php foreach ($selected_options as $selected_option) : ?>
                    <?php if ($selected_option === 'no-code') : ?>
                        <p class="technology_btns">No-code development</p>
                    <?php elseif ($selected_option === 'frontend') : ?>
                        <p class="technology_btns">Frontend</p>
                    <?php elseif ($selected_option === 'backend') : ?>
                        <p class="technology_btns">Backend</p>
                    <?php elseif ($selected_option === 'database') : ?>
                        <p class="technology_btns">Database</p>
                    <?php elseif ($selected_option === 'test') : ?>
                        <p class="technology_btns">Test automation</p>
                    <?php elseif ($selected_option === 'clouds') : ?>
                        <p class="technology_btns">Clouds</p>
                    <?php elseif ($selected_option === 'connectors') : ?>
                        <p class="technology_btns">Connectors development</p>
                    <?php endif; ?>
                <?php endforeach; ?>
        </div>
     
        <select id="technology_select">
            <?php foreach ($selected_options as $selected_option) : ?>
                    <?php if ($selected_option === 'no-code') : ?>
                        <option value="no-code">No-code development</option>
                    <?php elseif ($selected_option === 'frontend') : ?>
                        <option value="frontend">Frontend</option>
                    <?php elseif ($selected_option === 'backend') : ?>
                        <option value="backend">Backend</option>
                    <?php elseif ($selected_option === 'database') : ?>
                        <option value="database">Database</option>
                    <?php elseif ($selected_option === 'test') : ?>
                        <option value="test">Test automation</option>
                    <?php elseif ($selected_option === 'clouds') : ?>
                        <option value="clouds">Clouds</option>
                    <?php elseif ($selected_option === 'connectors') : ?>
                        <option value="connectors">Connectors development</option>
                    <?php endif; ?>
                <?php endforeach; ?>
        </select>

            <div class="technology_wrapper_content">
            <?php foreach ($selected_options as $selected_option) : ?>
            <?php if ($selected_option === 'no-code') : ?>
                <div id="no-code" class="technology_content__item">
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/dart.svg' class="technology_icon to_big lozad"></div>
                       Dart                    
                    </div>
                    <div class="technology_content__element">
                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/buble.svg' class="technology_icon lozad"></div>
                        Bubble.io (Web Apps + PWA)
                    </div>
                    <div class="technology_content__element">
                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/flutter.svg' class="technology_icon lozad"></div>
                        Flutter
                    </div>
                    <div class="technology_content__element">
                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/flutterflow.svg' class="technology_icon lozad"></div>
                        FlutterFlow
                    </div>
                    <div class="technology_content__element">
                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/n.svg' class="technology_icon lozad"></div>
                        Nativator (PWA Converter)
                    </div>
                    <div class="technology_content__element">
                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bdk.svg' class="technology_icon lozad"></div>
                        BDK (PWA Converter)
                    </div>
                    <div class="technology_content__element">
                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/glide.svg' class="technology_icon to_big lozad"></div>
                        Glide
                    </div>
                </div>
                <?php elseif ($selected_option === 'frontend') : ?>
                <div id="frontend" class="technology_content__item">
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/react.svg' class="technology_icon lozad"></div>
                        React
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/react_rout.svg' class="technology_icon lozad"></div>
                        ReactRouter
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/gatsb.svg' class="technology_icon lozad"></div>
                        Gatsby.JS
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/angular.svg' class="technology_icon lozad"></div>
                        Angular
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/cssmod.svg' class="technology_icon lozad"></div>
                        CssModules
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/next.svg' class="technology_icon lozad"></div>
                        Next.JS
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/ts.svg' class="technology_icon lozad"></div>
                        TypeScript
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/ngrx.svg' class="technology_icon lozad"></div>
                        NgRX
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/js.svg' class="technology_icon lozad"></div>
                        JavaScript
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/express.svg' class="technology_icon lozad"></div>
                        Express
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/redux.svg' class="technology_icon lozad"></div>
                        Redux
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/jasmin.svg' class="technology_icon lozad"></div>
                        Jasmine
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/helmet.svg' class="technology_icon lozad"></div>
                        Helmet
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/sharp.svg' class="technology_icon lozad"></div>
                        Sharp
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/rx.svg' class="technology_icon lozad"></div>
                        RxJs
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/jets.svg' class="technology_icon lozad"></div>
                        Jest
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/angular2.svg' class="technology_icon lozad"></div>
                        Angular.JS
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/html.svg' class="technology_icon lozad"></div>
                        HTML
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/css.svg' class="technology_icon lozad"></div>
                        CSS
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/electronjs.svg' class="technology_icon lozad"></div>
                        Electron.JS
                    </div>
                </div>
                <?php elseif ($selected_option === 'backend') : ?>
                <div id="backend" class="technology_content__item">
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/nodejs.svg' class="technology_icon lozad"></div>
                        Node.Js
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/invesrsify.svg' class="technology_icon lozad"></div>
                        InversifyJS
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/axios.svg' class="technology_icon lozad"></div>
                        axios
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/net.svg' class="technology_icon lozad"></div>
                        Nest.JS
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/js.svg' class="technology_icon lozad"></div>
                        JavaScript
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/env.svg' class="technology_icon lozad"></div>
                        .ENV
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/passport.svg' class="technology_icon lozad"></div>
                        Passport.JS
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/typeorm.svg' class="technology_icon lozad"></div>
                        TypeORM
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/express.svg' class="technology_icon lozad"></div>
                        Express
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/mongose.svg' class="technology_icon lozad"></div>
                        mongoose
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/svager.svg' class="technology_icon lozad"></div>
                        SWAGGER
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/karma.svg' class="technology_icon lozad"></div>
                        Karma
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/asp.net.svg' class="technology_icon lozad"></div>
                        ASP.NET
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/net.svg' class="technology_icon lozad"></div>
                        .NET
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/sharp.svg' class="technology_icon lozad"></div>
                        C#
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/asp.net.svg' class="technology_icon lozad"></div>
                        ASP.NET Core
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/asp.svg' class="technology_icon lozad"></div>
                        ASP.NET Core
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/ef.svg' class="technology_icon lozad"></div>
                        Entity Framework
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/serilog.svg' class="technology_icon lozad"></div>
                        Serilog
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/xunit.svg' class="technology_icon lozad"></div>
                        xUnit
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/nunit.svg' class="technology_icon lozad"></div>
                        NUnit
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/c.svg' class="technology_icon lozad"></div>
                        C
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/c++.svg' class="technology_icon lozad"></div>
                        C++
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/ts.svg' class="technology_icon lozad"></div>
                        TypeScript
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/jets.svg' class="technology_icon lozad"></div>
                        Jest
                    </div>
                </div>
                <?php elseif ($selected_option === 'database') : ?>
                <div id="database" class="technology_content__item">
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/MSSQL.svg' class="technology_icon lozad"></div>
                        MS SQL
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/postgr.svg' class="technology_icon lozad"></div>
                        PostgreSQL
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/mng.svg' class="technology_icon lozad"></div>
                        MongoDB
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/sql.svg' class="technology_icon lozad"></div>
                        SQL/TSQL
                    </div>
                </div>
                <?php elseif ($selected_option === 'test') : ?>
                <div id="test" class="technology_content__item">
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/sel.svg' class="technology_icon lozad"></div>
                        Selenium (Web Driver)
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/post.svg' class="technology_icon lozad"></div>
                        Postman (Api Tests)
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/ja.svg' class="technology_icon lozad"></div>
                        JMeter (Performance)
                    </div>
                </div>
                <?php elseif ($selected_option === 'clouds') : ?>
                <div id="clouds" class="technology_content__item">
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/azure.svg' class="technology_icon lozad"></div>
                        Azure (Microsoft)
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/o.svg' class="technology_icon lozad"></div>
                        DigitalOcean
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/aws.svg' class="technology_icon lozad"></div>
                        AWS (Amazon)
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bac/is.svg' class="technology_icon lozad"></div>
                        GCP (Google)
                    </div>
                </div>
                <?php elseif ($selected_option === 'connectors') : ?>
                <div id="connectors" class="technology_content__item">
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/airtable.png' class="technology_icon lozad"></div>
                        Airtable
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/google-map.png' class="technology_icon lozad"></div>
                        Google Maps
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/make.png' class="technology_icon lozad"></div>
                        Make
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/openai.png' class="technology_icon lozad"></div>
                        OpenAI
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/sendgrid.png' class="technology_icon lozad"></div>
                        SendGrid
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/sheets.png' class="technology_icon lozad"></div>
                        Google Sheets
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/sql.png' class="technology_icon lozad"></div>
                        SQL
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/unnamed.png' class="technology_icon lozad"></div>
                        XANO
                    </div>
                    <div class="technology_content__element">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/development-conectors/zapier.png' class="technology_icon lozad"></div>
                        zapier
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>