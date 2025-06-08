<h2>Categories Supprimées</h2>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php foreach($categoriesSupprimees as $key => $c): ?>
                                                <tr>
                                                    <td><?= $key+1 ?></td>
                                                    <td><?= $c['nomCategorie'] ?></td>
                                                    <td>
                                                        <button>Restaurer</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                     </tbody>
</table>