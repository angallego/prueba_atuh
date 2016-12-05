<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
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
                                                @if (! empty($greeting))
                                                    {{ $greeting }}
                                                @else
                                                    @if ($level == 'error')
                                                        Whoops!
                                                    @else
                                                        Hello!
                                                    @endif
                                                @endif
                                            </i>
                                        </div>
                                        <div style="font-size:24px; color:#7bab00;"><br>
                                            Saturday 5 May, 8.30 pm
                                        </div>
                                        <div style="font-size:16px;"><br>
                                            @foreach ($introLines as $line)
                                                <p>
                                                    {{ $line }}
                                                </p>
                                            @endforeach
                                        </div>

                                        <div>
                                            @foreach ($outroLines as $line)
                                                <p>
                                                    {{ $line }}
                                                </p>
                                            @endforeach

                                            <!-- Sub Copy -->
                                            @if (isset($actionText))
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                If you’re having trouble clicking the "{{ $actionText }}" button,
                                                                copy and paste the URL below into your web browser:
                                                            </p>

                                                            <p>
                                                                <a href="{{ $actionUrl }}" target="_blank">
                                                                    {{ $actionUrl }}
                                                                </a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endif

                                            <!-- Action Button -->
                                            @if (isset($actionText))
                                                <table>
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
                                                                class="button"
                                                                target="_blank">
                                                                {{ $actionText }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endif

                                            <!-- Salutation -->
                                            <p>
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
