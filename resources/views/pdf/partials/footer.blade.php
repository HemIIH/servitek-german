<div>
    <hr style="border:1px solid dimgray">
    <table>
        <tr>
            <td>
                <div><strong>{{ $textblocks['signature.company_name'] }}</strong></div>
                <div>{{ $textblocks['signature.street'] }}</div>
                <div>{{ $textblocks['signature.postal_code'] }} {{ $textblocks['signature.city'] }}</div>
                <div>GF: Payam R. Monfared,  Ing.</div>
                <div></div>
                <div>Steuernummer: {{ $textblocks['signature.tax_number'] }}</div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div>Tel: {{ $textblocks['signature.phone'] }}</div>
                <div>Fax: {{ $textblocks['signature.fax'] }}</div>
                <div>{{ $textblocks['signature.website'] }}</div>
                <div>{{ $textblocks['signature.email'] }}</div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div>IBAN: {{ $textblocks['signature.iban'] }}</div>
                <div>BIC/SWIFT : {{ $textblocks['signature.bic'] }}</div>
                <div>USt-IdNr.: {{ $textblocks['signature.tax_id'] }}</div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div>HRB 82474</div>
                <div>Amtsgericht Köln</div>
            </td>
        </tr>
    </table>

    <p class="page">{{trans('admin.Seite')}}: <span class="pagenum"></span></p>
</div>