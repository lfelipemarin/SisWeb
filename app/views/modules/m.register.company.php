<style>
    @charset "utf-8";
    /* CSS Document */
    /*html{
        font-size: 82%;
    }
    
    */    div#loginform {
        /*        margin-top: 7em;*/
        text-align: left;
        font-size: 82%;
    }


    div#loginform {
        font-family: sans-serif;
        padding: 0;
        margin: 0;
        margin-left: 20px;
        color: #444;
        background: #fff;
    }

    div#loginform {
        display: block;
        margin: 8px;
    }

    #page_content {
        background-color: white;
    }
    #page_content {
        margin: 0 .5em;
    }

    /*    div{
            display: block;
        }*/

    div#loginform div.container {
        text-align: left;
        width: 30em;
        margin: 0 auto;
    }

    div#loginform h1, div#loginform a.logo {
        display: block;
        text-align: center;
    }

    a, a:link, a:visited, a:active {
        text-decoration: none;
        color: #235a81;
        cursor: pointer;
        outline: none;
    }

    div#loginform h1, div#loginform a.logo {
        display: block;
        text-align: center;
    }

    h1 {
        /*        font-size: 140%;*/
        font-weight: bold;
    }

    form {
        padding: 0;
        margin: 0;
        display: inline;
    }

    fieldset {
        margin-top: 1em;
        margin-left: 8px;
        border-radius: 4px 4px 0 0;
        -moz-border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
        border: #aaa solid 1px;
        padding: 1.5em;
        background: #eee;
        text-shadow: 1px 1px 2px #fff inset;
        -moz-box-shadow: 1px 1px 2px #fff inset;
        -webkit-box-shadow: 1px 1px 2px #fff inset;
        box-shadow: 1px 1px 2px #fff inset;
        width:90%;
    }

    fieldset legend {
        font-weight: bold;
        color: #444;
        padding: 5px 10px;
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border: 1px solid #aaa;
        background-color: #fff;
        -moz-box-shadow: 3px 3px 15px #bbb;
        -webkit-box-shadow: 3px 3px 15px #bbb;
        box-shadow: 3px 3px 15px #bbb;
    }

    form.login label {
        float: left;
        width: 10em;
        font-weight: bolder;
        margin-top: 10px;
    }

    input[type=text] {
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        box-shadow: 0 1px 2px #ddd;
        -moz-box-shadow: 0 1px 2px #ddd;
        -webkit-box-shadow: 0 1px 2px #ddd;
        background: white;
        border: 1px solid #aaa;
        color: #555;
        padding: 4px;
        margin: 6px;
    }

    input[type=password] {
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        box-shadow: 0 1px 2px #ddd;
        -moz-box-shadow: 0 1px 2px #ddd;
        -webkit-box-shadow: 0 1px 2px #ddd;
        background: white;
        border: 1px solid #aaa;
        color: #555;
        padding: 4px;
        margin: 6px;
    }

    input[type=date] {
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        box-shadow: 0 1px 2px #ddd;
        -moz-box-shadow: 0 1px 2px #ddd;
        -webkit-box-shadow: 0 1px 2px #ddd;
        background: white;
        border: 1px solid #aaa;
        color: #555;
        padding: 4px;
        margin: 6px;
    }

    input, select, textarea {
        font-size: 1em;
    }
    
    select{
         border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        box-shadow: 0 1px 2px #ddd;
        -moz-box-shadow: 0 1px 2px #ddd;
        -webkit-box-shadow: 0 1px 2px #ddd;
        background: white;
        border: 1px solid #aaa;
        color: #555;
        padding: 4px;
        margin: 6px;
    }

    fieldset.tblFooters {
        margin-top: 0;
        margin-bottom: .5em;
        border-top: 0;
        text-align: right;
        float: none;
        clear: both;
        /*background: url(../images/gray-gradient.jpg);*/
        background-size: 100%;
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 5px;
    }

    input[type=submit]{
        margin-left: 14px;
        border: 1px solid #aaa;
        padding: 3px 7px;
        color: #111;
        text-decoration: none;
        background: #ddd;
        border-radius: 12px;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        text-shadow: 0 1px 0 #fff;
        font-weight: bold !important;
        background-size: 100% 100%;
        background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#cccccc));
        background: -webkit-linear-gradient(top, #ffffff, #cccccc);
        background: -moz-linear-gradient(top, #ffffff, #cccccc);
        background: -ms-linear-gradient(top, #ffffff, #cccccc);
        background: -o-linear-gradient(top, #ffffff, #cccccc);
    }
</style>

<div id="loginform">
    <div id="page_content">
        <h1>Registro de Empresa</h1>
        <form action="index.php" method="post" name="compReg" class="login" style="display: inline">
            <fieldset>
                <legend>Empresa</legend>
                <div class="item">
                    <label for="input_id">Id:</label>
                    <input type="text" name="nm_id" id="input_id" value="" 
                           size="24" class="textfield" required>
                </div>
                <div class="item">
                    <label for="input_nit">Nit:</label>
                    <input type="text" name="nm_nit" id="input_nit" value="" 
                           size="24" class="textfield" required>
                </div>
                <div class="item">
                    <label for="input_name">Nombre:</label>
                    <input type="text" name="nm_name" id="input_name" value="" 
                           size="24" class="textfield" required>
                </div>  
                <div class="item">
                    <label for="input_address">Dirección:</label>
                    <input type="text" name="nm_address" id="input_address" value="" 
                           size="24" class="textfield" required>
                </div>
                <div class="item">
                    <label for="input_tel1">Tel 1:</label>
                    <input type="text" name="nm_tel1" id="input_tel1" value="" 
                           size="24" class="textfield" required>
                </div>   
                <div class="item">
                    <label for="input_tel2">Tel 2:</label>
                    <input type="text" name="nm_tel2" id="input_tel2" value="" 
                           size="24" class="textfield" required>
                </div> 
                <div class="item">
                    <label for="input_web">Página Web:</label>
                    <input type="text" name="nm_web" id="input_web" value="" 
                           size="24" class="textfield" required>
                </div>  
                <div class="item">
                    <label for="input_sector">Sector:</label>
                    <select name="nm_sectors" id="input_sector" class="select">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="fiat" selected>Fiat</option>
                        <option value="audi">Audi</option>
                    </select>                
                </div>  
                <div class="item">
                    <label for="input_date">Fecha de Registro:</label>
                    <input type="date" name="nm_date" id="input_date" value="" 
                           size="24" class="textfield" required>
                </div>                                            
                <!--<input type="hidden" name="server" value="1">-->
            </fieldset>
            <fieldset class="tblFooters">
                <input value="Go" name="Go" type="submit" id="input_go">
                <!--<input type="hidden" name="target" value="index.php">-->
                <!--<input type="hidden" name="token" value="10312c7cb8a6dcfd33a8d4c6a62c5c55">-->
            </fieldset>
        </form>
    </div>
</div>

