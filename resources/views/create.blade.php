<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <form action="{{route('store')}}" method="post" >
        {{method_field('post')}}
        @csrf
     <tr>
        <td align="center">
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center"><input type="text" name="confidential" placeholder="|:|PLACEHOLDER_CONFIDENTIAL|:|"></td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="80%"></td>
                    <td width="15%">
                    <p><span><input type="text" name="baf_head" placeholder="|:|PLACEHOLDER_BAF_HEAD|:|"></span></p>
                        <p><span><input type="text" name="maintanence" placeholder="|:|PLACEHOLDER_MAINTANENCE|:|"></span></p>
                        <p><span><input type="text" name="supply" placeholder="|:|PLACEHOLDER_SUPPLY|:|"></span></p>
                        <p><span><input type="text" name="dhaka_canton" placeholder="|:|PLACEHOLDER_DHAKA_CANTON|:|"></span></p>
                    </td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="80%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_REF_NO|:|"></p>
                    </td>
                    <td width="10%" style="padding-right:2px;">
                        <p><input type="date" placeholder="|:|PLACEHOLDER_DATE|:|"></p>
                    </td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <p><input type="text" placeholder="|:|PLACEHOLDER_TITLE|:|"></p>
                    </td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>সূত্রঃ </td>
                </tr>
                <tr>
                    <td width="10%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_CONDITION_SER_NO|:|"></p>
                    </td>
                    <td width="30%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_CONDITION_TITLE|:|"></p>
                    </td>
                    <td width="20%">
                        <p><input type="date" placeholder="|:|PLACEHOLDER_CONDITION_DATE|:|"></p>
                    </td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td width="10%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_CONDITION_SER_NO|:|"></p>
                    </td>
                    <td width="30%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_CONDITION_TITLE|:|"></p>
                    </td>
                    <td width="20%">
                        <p><input type="date" placeholder="|:|PLACEHOLDER_CONDITION_DATE|:|"></p>
                    </td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td width="10%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_CONDITION_SER_NO|:|"></p>
                    </td>
                    <td width="30%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_CONDITION_TITLE|:|"></p>
                    </td>
                    <td width="20%">
                        <p><input type="date" placeholder="|:|PLACEHOLDER_CONDITION_DATE|:|"></p>
                    </td>
                    <td width="30%"></td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="90%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_DESCRIPTION|:|"></p>
                    </td>
                </tr>
                <tr>
                    <td width="90%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_DESCRIPTION|:|"></p>
                    </td>
                </tr>
                <tr>
                    <td width="90%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_DESCRIPTION|:|"></p>
                    </td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="80%"></td>
                    <td width="10%">
                        <p><input type="text" placeholder="|:|PLACEHOLDER_SIGNATURE|:|"></p>
                        <p><input type="text" placeholder="|:|PLACEHOLDER_NAME|:|"></p>
                        <p><input type="text" placeholder="|:|PLACEHOLDER_RANK|:|"></p>
                        <p><input type="text" placeholder="|:|PLACEHOLDER_DESCRIPTION|:|"></p>
                    </td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="90%">
                        <p>Adjacent : <span><input type="text" placeholder="|:|PLACEHOLDER_ADJACENT|:|"></span></p>
                        <p>Distribution : <span><input type="text" placeholder="|:|PLACEHOLDER_DISTRIBUTION|:|"></span></p>
                        <p>External : <span><input type="text" placeholder="|:|PLACEHOLDER_EXTERNAL|:|"></span></p>
                        <p>Functional :</p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p><span><input type="text" placeholder="|:|PLACEHOLDER_FUNCTIONAL|:|"></span></p>
                        <p>Internal : <span><input type="text" placeholder="|:|PLACEHOLDER_INTERNAL|:|"></span></p>
                    </td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center"><input type="text" placeholder="|:|PLACEHOLDER_CONFIDENTIAL|:|"></td>
                </tr>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <button type="submit">Submit</button>
                </tr>
            </table>
        </td>
     </tr>
     
    </form>
</table>