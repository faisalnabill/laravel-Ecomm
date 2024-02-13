<?php
$title = 'Edit';
include resource_path('views/header.php'); ?>

<h1 class="mb-2">Edit</h1>
<form method="post" action="<?= route('CategoriesUpdate', [$category->id]) ?>">
    <input type="hidden" name="_token" value="<?= csrf_token() ?>">
    <input type="hidden" name="_method" value="put">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">name</label>
        <div class="mb-3 col-sm-10">
            <input type="text" name="name" class="form-control" id="name" value="<?= $category->name ?>">
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">description</label>
            <div class="mb-3 col-sm-10">
                <textarea name="description" class="form-control" id="description"><?= $category->description ?></textarea>
            </div>
            <div class="from-group">
                <label for="parent_id" class="mb-3 col-sm-2 col-form-control">category </label>

                <select class="mb-3 form-select" aria-label="Disabled select example">
                    <option value="">no parent</option>
                    <?php foreach (App\Models\Category::all() as $cat) : ?>
                        <option value="<?= $cat->id ?>" <?php if ($cat->id == $category->parent_id) : ?> selected <?php endif ?>><?= $cat->name ?></option>
                    <?php endforeach ?>
                </select>
                </select>
            </div>

        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">update</button>

</form>
<?php include resource_path('views/footer.php'); ?>
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
