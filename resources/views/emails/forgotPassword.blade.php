{{--@component('mail::message')--}}
{{--    <p>Hello {{ $user -> name }}</p>--}}

{{--    @component('mail::button', ['url'=>url('reset-password/'.$user->remember_token)])--}}
{{--        Verify--}}
{{--    @endcomponent--}}

{{--    <p>In case you have issues please contact us.</p>--}}

{{--    Thanks <br/>--}}
{{--    {{ config('app.name') }}--}}
{{--@endcomponent--}}
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" type="text/css">

    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0;
            mso-table-rspace: 0;
        }

        @media only screen and (max-width:480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }

        .outlook-group-fix {
            width:100% !important;
        }

        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');

        @media only screen and (max-width:595px) {
            .container {
                width: 100% !important;
            }
            .button {
                display: block !important;
                width: auto !important;
            }
        }
    </style>
</head>

<body style="font-family: 'Inter', sans-serif; background: #E5E5E5;">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#F6FAFB">
    <tbody>
    <tr>
        <td valign="top" align="center">
            <table class="container" width="600" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr style="background-color: black;">
                    <td style="padding:48px 0 30px 0; text-align: center; font-size: 14px; color: #4C83EE;">
                        <img src="https://mailsend-email-assets.mailtrap.io/ry8wxkazs4voyd3cx9h35acnhr8b.png" alt="Logo">
                    </td>
                </tr>
                <tr>
                    <td class="main-content" style="padding: 48px 30px 40px; color: #000000;" bgcolor="#f2f2f2">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                            <tr>
                                <td style="padding: 0 0 24px 0; font-size: 18px; line-height: 150%; font-weight: bold; color: #000000; letter-spacing: 0.01em; text-indent: 20px;">
                                    Buna, {{ $user->nume . ' ' . $user->prenume }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0; font-size: 14px; line-height: 150%; font-weight: 400; color: #000000; letter-spacing: 0.01em; text-indent: 20px;">
                                    Am primit o solicitare de resetare a parolei pentru contul dumneavoastra. Daca nu ati facut dvs. aceasta solicitare, va rugam sa ignorati acest email.
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 16px 0; font-size: 14px; line-height: 150%; font-weight: 700; color: #000000; letter-spacing: 0.01em; text-indent: 20px;">
                                    Faceti click pe urmatorul link pentru resetarea parolei:
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 24px 0;">
                                    <a class="button" href="{{ route('password.reset', ['token' => $user->remember_token]) }}" title="Resetare parola" style="width: 100%; background: #744d4f; text-decoration: none; display: inline-block; padding: 10px 0; color: #fff; font-size: 16px; line-height: 21px; text-align: center; font-weight: bold; border-radius: 7px;">Resetare parola</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0; font-size: 14px; line-height: 150%; font-weight: 400; color: #000000; letter-spacing: 0.01em; text-indent: 20px;">
                                    Acest link va fi valabil timp de 24 de ore. Dupa acest timp, va trebui sa solicitati o noua resetare a parolei.
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 60px 0; font-size: 14px; line-height: 150%; font-weight: 400; color: #000000; letter-spacing: 0.01em; text-indent: 20px;">
                                    Daca aveti intrebari sau intampinati dificultati, va rugam sa vizitati sectiunea de 'Contact' de pe site-ul nostru pentru a trimite un mesaj.
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 16px;">
                                    <span style="display: block; width: 117px; border-bottom: 1px solid #8B949F;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 14px; line-height: 170%; font-weight: 400; color: #000000; letter-spacing: 0.01em;">
                                    Cu stimă,<br>
                                    Echipa <strong>IubesteDobrogea</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 24px 0 48px; font-size: 0;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto">
                            <tr>
                                <td style="vertical-align:top;width:300px;">
                                     <div class="outlook-group-fix" style="padding: 0 0 20px 0; vertical-align: top; display: inline-block; text-align: center; width:100%;">
                                        <span style="padding: 0; font-size: 11px; line-height: 15px; font-weight: normal; color: #8B949F;">IubesteDobrogea</span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
