<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>

    <?php

    $style = [
        /* Layout ------------------------------ */

        'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;',
        'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;',

        /* Masthead ----------------------- */

        'email-masthead' => 'padding: 25px 0; text-align: center;',
        'email-masthead_name' => 'font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',

        'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
        'email-body_inner' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0;',
        'email-body_cell' => 'padding: 35px;',

        'email-footer' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;',
        'email-footer_cell' => 'color: #AEAEAE; padding: 35px; text-align: center;',

        /* Body ------------------------------ */

        'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
        'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',

        /* Type ------------------------------ */

        'anchor' => 'color: #3869D4;',
        'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;',
        'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;',
        'paragraph-sub' => 'margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
        'paragraph-center' => 'text-align: center;',

        /* Buttons ------------------------------ */

        'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                     background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                     text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',

        'button--green' => 'background-color: #22BC66;',
        'button--red' => 'background-color: #dc4d2f;',
        'button--blue' => 'background-color: #3869D4;',
    ];
    ?>

<?php $fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;'; ?>
</head>

<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" valign="top" bgcolor="#245d01" style="background-color:#245d01;"><br>
                <br>
                <table width="600" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left" valign="top"><img src="{!! asset('img/top.png') !!}" width="600" height="191" style="display:block;"></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" bgcolor="#ffffff" style="background-color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; padding:0px 5px 0px 15px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="left" valign="top" style="font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#000000;">
                                        <div style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:72px; color:#7bab00;">
                                            <i>
                                                <!-- Greeting -->
                                                <h1 style="{{ $style['header-1'] }}">
                                                    @if (! empty($greeting))
                                                        {{ $greeting }}
                                                    @else
                                                        @if ($level == 'error')
                                                            Whoops!
                                                        @else
                                                            Hello!
                                                        @endif
                                                    @endif
                                                </h1>
                                            </i>
                                        </div>
                                        <div style="font-size:24px; color:#7bab00;"><br>
                                            Saturday 5 May, 8.30 pm
                                        </div>
                                        <div style="font-size:16px;"><br>
                                            <!-- Intro -->
                                            @foreach ($introLines as $line)
                                                <p style="{{ $style['paragraph'] }}">
                                                    {{ $line }}
                                                </p>
                                            @endforeach
                                        </div>

                                        <div>
                                            <!-- Outro -->
                                            @foreach ($outroLines as $line)
                                                <p style="{{ $style['paragraph'] }}">
                                                    {{ $line }}
                                                </p>
                                            @endforeach

                                            <!-- Sub Copy -->
                                            @if (isset($actionText))
                                                <table style="{{ $style['body_sub'] }}">
                                                    <tr>
                                                        <td style="{{ $fontFamily }}">
                                                            <p style="{{ $style['paragraph-sub'] }}">
                                                                If you’re having trouble clicking the "{{ $actionText }}" button,
                                                                copy and paste the URL below into your web browser:
                                                            </p>

                                                            <p style="{{ $style['paragraph-sub'] }}">
                                                                <a style="{{ $style['anchor'] }}" href="{{ $actionUrl }}" target="_blank">
                                                                    {{ $actionUrl }}
                                                                </a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endif

                                            <!-- Action Button -->
                                            @if (isset($actionText))
                                                <table style="{{ $style['body_action'] }}" align="center" width="100%" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center">
                                                            <?php
                                                                switch ($level) {
                                                                    case 'success':
                                                                        $actionColor = 'button--green';
                                                                        break;
                                                                    case 'error':
                                                                        $actionColor = 'button--red';
                                                                        break;
                                                                    default:
                                                                        $actionColor = 'button--blue';
                                                                }
                                                            ?>

                                                            <a href="{{ $actionUrl }}"
                                                                style="{{ $fontFamily }} {{ $style['button'] }} {{ $style[$actionColor] }}"
                                                                class="button"
                                                                target="_blank">
                                                                {{ $actionText }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endif

                                            <!-- Salutation -->
                                            <p style="{{ $style['paragraph'] }}">
                                                Regards,<br>{{ config('app.name') }}
                                            </p>
                                        </div>
                                    </td>
                                    <td width="210" align="center" valign="top"><img src="{!! asset('img/mainpic.png') !!}" width="259" height="416"></td>
                                </tr>
                            </table></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top"><img src="{!! asset('img/bot.png') !!}" width="600" height="127" style="display:block;"></td>
                        </tr>
                    </table>
                    <br>
                    <br></td>
                </tr>
            </table>
        </body>
        </html>
