<!--<style type="text/css">-->
<!--    .wrapper-->
<!--    {-->
<!--        overflow: hidden;-->
<!--    }-->
<!--    div.wrapper div.empForm-->
<!--    {-->
<!--        float: left;-->
<!--    }-->
<!--    div.empForm-->
<!--    {-->
<!--        width: 400px;-->
<!--        margin: 0 auto;-->
<!--    }-->
<!--    form.appForm-->
<!--    {-->
<!--        width: 400px;-->
<!--        margin: 50px 20px 0 20px;-->
<!--    }-->
<!--    form.appForm fieldset-->
<!--    {-->
<!--        padding: 10px;-->
<!--        background: #f1f1f1;-->
<!--        border: 1px solid #e4e4e4;-->
<!--    }-->
<!--    form.appForm fieldset legend-->
<!--    {-->
<!--        background: #e4e4e4;-->
<!--        padding: 5px;-->
<!--        font-size: 1em;-->
<!--        color: #666;-->
<!--    }-->
<!--    form.appForm fieldset p.message-->
<!--    {-->
<!--        background: green;-->
<!--        color: #fff;-->
<!--        padding: 5px;-->
<!--        margin: 3px 0;-->
<!--        border-radius: 3px;-->
<!--        font-size: 0.85em;-->
<!--    }-->
<!--    form.appForm fieldset p.message.error-->
<!--    {-->
<!--        background: #900;-->
<!--    }-->
<!--    form.appForm table-->
<!--    {-->
<!--        width: 100%;-->
<!--    }-->
<!--    form.appForm label-->
<!--    {-->
<!--        font-size: 0.85em;-->
<!--        color: #666666;-->
<!--    }-->
<!--    form.appForm table tr td input[type="text"],-->
<!--    form.appForm table tr td input[type="number"]-->
<!--    {-->
<!--        width: 96%;-->
<!--        padding: 2%;-->
<!--        font-size: 0.85em;-->
<!--    }-->
<!--    form.appForm table tr td input[type="submit"]-->
<!--    {-->
<!--        padding: 8px;-->
<!--        border-radius: 3px;-->
<!--        background: green;-->
<!--        color: #fff;-->
<!--        font-size: 0.85em;-->
<!--        cursor: pointer;-->
<!--    }-->
<!--    form.appForm table tr td-->
<!--    {-->
<!--        padding: 3px 0;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<div class="empForm">-->
<!--    <form action="" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" class="appForm">-->
<!--        <fieldset>-->
<!--            <legend>Employee Information</legend>-->
<!---->
<!--            <table>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label for="name">Employee Name :</label>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <input type="text" name="name" id="name" placeholder="Write the employee name" required>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label for="age">Age :</label>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <input type="number" name="age" id="age" placeholder="Enter age .." min="20" max="60" step="1">-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label for="address">Address :</label>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <input type="text" name="address" id="address" placeholder="Write the employee address" required>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label for="salary">Salary</label>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <input type="number" name="salary" id="salary" placeholder="Enter the salary" min="2000" max="9000" step="0.5" required>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label for="tax">Tax :</label>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <input type="number" name="tax" id="tax" placeholder="Enter tax ..." min="1" max="5" step="0.01" required>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <input type="submit" name="submit" value="Login">-->
<!--                    </td>-->
<!--                </tr>-->
<!--            </table>-->
<!---->
<!--        </fieldset>-->
<!--    </form>-->
<!--</div>-->




<style>
    * {
        box-sizing: border-box;
    }

    body {
        background: #ecf0f1;
        font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
    }

    .page-wrap {
        max-width: 75rem;
        margin: 0 auto;
    }

    h1 {
        color: #8e44ad;
        font-size: 1.5rem;
        letter-spacing: -1px;
        margin: 1.25rem 0;
    }

    input:focus ~ label, input:valid ~ label {
        font-size: 0.75em;
        color: #8e44ad;
        top: -2.25rem;
        transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
    }

    .styled-input {
        float: left;
        width: 33.3333%;
        margin: 2rem 0 1rem;
        position: relative;
    }
    .styled-input label {
        color: #999;
        padding: 1rem;
        position: absolute;
        top: 0;
        left: 0;
        transition: all 0.25s cubic-bezier(0.2, 0, 0.03, 1);
        pointer-events: none;
    }
    .styled-input.wide {
        width: 100%;
    }

    input {
        padding: 1rem 1rem;
        border: 0;
        width: 100%;
        font-size: 1rem;
    }
    input ~ span {
        display: block;
        width: 0;
        height: 3px;
        background: #8e44ad;
        position: absolute;
        bottom: 0;
        left: 0;
        transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
    }
    input:focus {
        outline: 0;
    }
    input:focus ~ span {
        width: 100%;
        transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
    }
    input[type=submit]
    {
        width: 100px;
        background: #8e44ad;
        color: #FFFFFF;
    }
</style>

<div class="page-wrap">
    <form action="" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
        <div class="styled-input">
            <input type="text" name="name" id="name" required/>
            <label>اسم الموظف</label>
            <span></span>
        </div>
        <div class="styled-input">
            <input type="number" name="age" id="age" min="22" max="60" step="1" required/>
            <label>العمر</label>
            <span></span>
        </div>
        <div class="styled-input">
            <input type="text" name="address" id="address" required />
            <label>العنوان</label>
            <span></span>
        </div>
        <div class="styled-input">
            <input type="number" name="salary" id="salary" min="2000" max="9000" step="0.5" required />
            <label>الراتب</label>
            <span></span>
        </div>
        <div class="styled-input">
            <input type="number" name="tax" id="tax" min="1" max="5" step="0.01" required />
            <label>الضريبة (%)</label>
            <span></span>
        </div>
        <input type="submit" name="submit" value="Add">
    </form>
</div>