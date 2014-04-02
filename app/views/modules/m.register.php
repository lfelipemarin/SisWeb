<style>
    div.outIcon{
        display: inline-block;
        text-align: center;
    }
    #companyIcon{
        text-align: center;
        text-decoration:none; 
        border:0; 
        width:100px; 
        height : 100px; 
        margin : 10px; 
        padding : 0;   
        background : url(app/views/images/companySmall.png) no-repeat 0 0;
        -webkit-transition:width .5s, height .5s, background .5s, -webkit-transform .5s; /* For Safari 3.1 to 6.0 */
        transition:width .5s, height .5s, background .5s, transform .5s;

    }
    #contactIcon{
        text-decoration:none; 
        border:0; 
        width:100px; 
        height : 100px;
        margin : 10px; 
        padding : 0;   
        background : url(app/views/images/contactSmall.png) no-repeat 0 0;
        -webkit-transition:width .5s, height .5s, background .5s, -webkit-transform .5s; /* For Safari 3.1 to 6.0 */
        transition:width .5s, height .5s, background .5s, transform .5s;
    }
    #estimateIcon{
        text-decoration:none; 
        border:0; 
        width:100px;
        height : 100px;
        margin : 10px;
        padding : 0;   
        background : url(app/views/images/estimateIconSmall.png) no-repeat 0 0;
        -webkit-transition:width .5s, height .5s, background .5s, -webkit-transform .5s; /* For Safari 3.1 to 6.0 */
        transition:width .5s, height .5s, background .5s, transform .5s;
    }

    #invoiceIcon{
        text-decoration:none;
        border:0; 
        width:100px;
        height : 100px;
        margin : 10px;
        padding : 0;   
        background : url(app/views/images/invoiceIconSmall.png) no-repeat 0 0;
        -webkit-transition:width .5s, height .5s, background .5s, -webkit-transform .5s; /* For Safari 3.1 to 6.0 */
        transition:width .5s, height .5s, background .5s, transform .5s;
    }

    #companyIcon:hover{
        background : url(app/views/images/company.png) no-repeat 0 0;
        width: 128px;
        height: 128px;
        -webkit-transform:rotate(360deg); /* Chrome, Safari, Opera */
        transform:rotate(360deg);
    }
    #contactIcon:hover{
        background : url(app/views/images/contact-4.png) no-repeat 0 0;
        width: 128px;
        height: 128px;
        -webkit-transform:rotate(360deg); /* Chrome, Safari, Opera */
        transform:rotate(360deg);
    }
    #estimateIcon:hover{
        background : url(app/views/images/estimateIcon.png) no-repeat 0 0;
        width: 128px;
        height: 128px;
        -webkit-transform:rotate(360deg); /* Chrome, Safari, Opera */
        transform:rotate(360deg);
    }
    #invoiceIcon:hover{
        background : url(app/views/images/invoiceIcon.png) no-repeat 0 0;
        width: 128px;
        height: 128px;
        -webkit-transform:rotate(360deg); /* Chrome, Safari, Opera */
        transform:rotate(360deg);
    }
   
</style>
<div>
    <section>
        <article>
            <header>
                <h2>Registrar</h2>
            </header>
            <div class="outIcon" id="company">
                <h1 id="companyIcon">
                    <a href="#" style="display : block; height : 128px; text-indent : -9999px; "></a>
                </h1>
                <h1>EMPRESA</h1>
            </div>
            <div class="outIcon" id="contact">
                <h1 id="contactIcon">
                    <a href="#" style="display : block; height : 128px; text-indent : -9999px; "></a>
                </h1> 
                <h1>CONTACTO</h1>
            </div>
            <div class="outIcon" id="estimate">
                <h1 id="estimateIcon">
                    <a href="#" style="display : block; height : 128px; text-indent : -9999px; "></a>
                </h1> 
                <h1>COTIZACIÓN</h1>
            </div>
            <div class="outIcon" id="invoice">
                <h1 id="invoiceIcon">
                    <a href="#" style="display : block; height : 128px; text-indent : -9999px; "></a>
                </h1> 
                <h1>FACTURA</h1>
            </div>         
        </article>
    </section>
</div>