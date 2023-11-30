<?
require_once (__DIR__.'/crest.php');

$result = CRest::call(
		'crm.contact.get',
		['ID' => '1', ]
	);

echo '<pre>';
//	print_r($result);
echo '</pre>';
?>

<link rel='stylesheet' href='https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css'><link rel="stylesheet" href="./style.css">

<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Номер сделки</th>
        <th>Название сделки</th>
        <th>Количество комментариев</th>
        <th>Последний комментарий</th>
        <th>Дата последнего комментария</th>
        <th>Автор комментариев</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>1</td>
        <td>Тестовая сделка</td>
        <td>1</td>
        <td>Последний комментарий</td>
        <td>29.11.2023</td>
        <td>Савин Константин</td>
    </tr>    <tr>
        <td>2</td>
        <td>Тестовая сделка</td>
        <td>12</td>
        <td>Nunc sed blandit libero volutpat sed cras ornare arcu dui. Phasellus vestibulum lorem sed risus ultricies tristique nulla. Faucibus purus in massa tempor nec feugiat nisl.</td>
        <td>29.11.2023</td>
        <td>Савин Константин</td>
    </tr>    <tr>
        <td>3</td>
        <td>Тестовая сделка</td>
        <td>35</td>
        <td>Tortor aliquam nulla facilisi cras fermentum odio eu feugiat.й</td>
        <td>11.11.2023</td>
        <td>Савин Константин</td>
    </tr>    <tr>
        <td>14</td>
        <td>Тестовая сделка</td>
        <td>9</td>
        <td>Комментарий</td>
        <td>12.11.2023</td>
        <td>Савин Константин</td>
    </tr>
    </tbody>
</table>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>

<script src='https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js'></script><script  src="./script.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.buttons-pdf').hide();

    });
</script>
