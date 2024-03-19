<!--Download - https://github.com/lime7/responsive-html-template.git-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
        .ReadMsgBody {width: 100%; background-color: #ffffff;}
        .ExternalClass {width: 100%; background-color: #ffffff;}

                /* Windows Phone Viewport Fix */
        @-ms-viewport {
            width: device-width;
        }
    </style>

</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background: #e7e7e7; width: 100%; height: 100%; margin: 0; padding: 0;">
    <!-- Mail.ru Wrapper -->
    <div id="mailsub">
        <!-- Wrapper -->
        <center class="wrapper" style="table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; padding: 0; margin: 0 auto; width: 100%; max-width: 960px;">
            <!-- Old wrap -->
            <div class="webkit">
                <table cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="padding: 0; margin: 0 auto; width: 100%; max-width: 960px;">
                    <tbody>
                        <tr>
                            <td align="center">
                                <!-- Start Section (1 column) -->
                                <table id="intro" cellpadding="0" cellspacing="0" border="0" bgcolor="#4F6331" align="center" style="width: 100%; padding: 0; margin: 0; background-image: url(https://images.pexels.com/photos/3183198/pexels-photo-3183198.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1); background-size: auto 102%; background-position: center center; background-repeat: no-repeat; background-color: #080e02">
                                    <tbody >
                                        <tr><td colspan="3" height="20"></td></tr>
                                        <tr>
                                            <td width="330" style="width: 33%;"></td>
                                            <!-- Logo -->
                                            <td width="300" style="width: 30%;" align="center">
                                                <a href="#" target="_blank" border="0" style="border: none; display: block; outline: none; text-decoration: none; line-height: 60px; height: 60px; color: #ffffff; font-family: Verdana, Geneva, sans-serif;  -webkit-text-size-adjust:none;">
                                                    <images src="{{ asset('images/logoIncuvalabRemovebg.png') }}"  alt="Incuvalab" width="193" height="43" border="0" style="border: none; display: block; -ms-interpolation-mode: bicubic;">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr><td colspan="3" height="100"></td></tr>
                                        <!-- Main Title -->
                                        <tr>
                                            <td colspan="3" height="60" align="center">
                                                <div border="0" style="border: none; line-height: 50px; color: #4A0026; font-family: Verdana, Geneva, sans-serif; font-size: 52px; text-transform: uppercase; font-weight: bolder;">
                                                    Hola {{ $fname }}!
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Line 1 -->
                                        <tr>
                                            <td colspan="3" height="20" valign="bottom" align="center">
                                                <div style="color: #FFFFFF;">
                                                    _______________________________________________
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Meta title -->
                                        <tr>
                                            <td colspan="3">
                                                <table cellpadding="0" cellspacing="0" border="0" align="center" style="padding: 0; margin: 0; width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="90" style="width: 9%;"></td>
                                                            <td align="center">
                                                                <div border="0" style="border: none; height: 60px;">
                                                                    <p style="font-size: 18px; line-height: 24px; font-family: Verdana, Geneva, sans-serif; color: #FFFFFF; text-align: center; mso-table-lspace:0;mso-table-rspace:0;">
                                                                        Esta es un correo de notificacion de Incuvalab. <br>
                                                                        Saludos, se acaba de agendar una nueva reunion para tu persona por el Docente/Mentor: {{ $proffesor }}<br>
                                                                        Por Favor revisa tu calendario para más información.
                                                                        <br>
                                                                        <br>
                                                                        <div style="background-color: #4A0026;  border-radius: 25px; background-size: 100% 100%;  background-position: center center; width: 400px; text-decoration: none; font-size: 17px; line-height: 52px; color: #ffffff; font-family: Verdana, Geneva, sans-serif; text-align: center; background-color: #4A0026;  -webkit-text-size-adjust:none;">
                                                                            Atentamente, Profesor:  {{ $proffesor }}
                                                                        </div>
                                                                    </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr><td colspan="3" height="160"></td></tr>
                                        <tr>
                                            <td width="330"></td>
                                            <!-- Button Start -->
                                            <td width="300" align="center" height="52">

                                            </td>
                                            <td width="330"></td>
                                        </tr>
                                        <tr><td colspan="3" height="85"></td></tr>
                                    </tbody>
                                </table><!-- End Start Section -->

                                <!-- Footer -->
                                <table id="news__article" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center" style="width: 100%; padding: 0; margin: 0; background-color: #ffffff">
                                    <tbody>
                                        <tr><td colspan="3" height="23"></td></tr>
                                        <tr>
                                            <td align="center">
                                                <div border="0" style="border: none; line-height: 14px; color: #727272; font-family: Verdana, Geneva, sans-serif; font-size: 16px;">
                                                    Incuvalab - Univalle
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan="3" height="23"></td></tr>
                                    </tbody>
                                </table> <!-- End Footer -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- End Old wrap -->
        </center> <!-- End Wrapper -->
    </div> <!-- End Mail.ru Wrapper -->
</body>

</html>

