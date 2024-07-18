<div class="container">
    <table>
        <thead>
            <tr>
                <th>Termék neve</th>
                <th>Cefre/tiszta pálinka li arány</th>
                <th>Hőfoka</th>
                <th>Alkohol százaléka</th>
                <th>Megrendelem</th>
            </tr>
        </thead>
        <tbody>
           
    <?php foreach ($prtable as $item): ?>
           <tr>
                <td><?= $item->title ?></td>
                <td><?= $item->cf ?></td>
                <td><?= $item->hf ?></td>
                <td><?= $item->a ?></td>
                <td><a href="<?= base_url('service/service/'.$item->id) ?>">Rendelés</a></td>
            </tr>
    <?php endforeach; ?>

        </tbody>
    </table>
    <img src="<?= base_url('picture/uveg2.jpeg') ?>" alt="Pálinkásüvegek" class="uveg">
</div>




