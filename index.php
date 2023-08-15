

<html>
    <head>
        <title>Willkommen!</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <div id="container">
            <table class="topTable">
                <tr>
                    <td id="Einf-1-Cell" class="slideInFromBottom">
                        <b id="Einf-1-1">Hey, </b><b id="Einf-1-2">ich bin Kilian</b>
                    </td>
                </tr>
                <tr>
                    <td id="Einf-2-Cell" class="invisible">
                        <t id="Einf-2">Ein zwanzig-jähriger Student aus Berlin</t>
                    </td>
                <tr>
            </table>
            <table class="secondTable">
                <tr class="iconRow">
                    <td class="spacingCell"></td>
                    <td class="iconCell invisible" id="ic1"><a href="https://github.com/SpacedOutDev" target="_blank"><img src="assets/github.png"></a></td>
                    <td class="iconCell invisible" id="ic2"><a href="mailto:kilian_public@yahoo.com" target="_blank"><img src="assets/email.png"></a></td>
                    <td class="iconCell invisible" id="ic3"><a href="https://www.discord.com/users/1140907951368974336" target="_blank"><img src="assets/discord.png"></a></td>
                    <td class="iconCell invisible" id="ic4"><a href="https://twitter.com/SpacedOutDev" target="_blank"><img src="assets/twitter.png"></a></td>
                    <td class="spacingCell"></td>
                </tr>
            </table>
        </div>
        <span class="circle" onclick="toggleDarkMode()"></span>
    </body>

    <script>
        function toggleDarkMode(){
            document.body.classList.toggle("dark-mode")
        }

        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.body.classList.toggle("dark-mode")
        }

        setTimeout(function () {
            document.getElementById("Einf-2-Cell").classList.toggle("invisible");
            document.getElementById("Einf-2-Cell").classList.toggle("slideInFromBottom");
        }, 800);

        // Fade in icons
        setTimeout(function () {
            document.getElementById("ic1").classList.toggle("invisible");
            document.getElementById("ic1").classList.toggle("fadeIn");
        }, 1500);
        setTimeout(function () {
            document.getElementById("ic2").classList.toggle("invisible");
            document.getElementById("ic2").classList.toggle("fadeIn");
        }, 1700);
        setTimeout(function () {
            document.getElementById("ic3").classList.toggle("invisible");
            document.getElementById("ic3").classList.toggle("fadeIn");
        }, 1900);
        setTimeout(function () {
            document.getElementById("ic4").classList.toggle("invisible");
            document.getElementById("ic4").classList.toggle("fadeIn");
        }, 2100);
    </script>
</html>