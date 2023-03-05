<?php

public function update()
{
    // Validate the new image
    $this->validate([
        'newImage' => 'image|max:1024', // max file size 1MB
    ]);

    // Store the new image
    $newImagePath = $this->newImage->store('public/images');

    // Delete the old image
    Storage::delete($this->imagePath);

    // Update the image path in the database
    Model::query()->where('id', $this->modelId)->update([
        'image_path' => $newImagePath,
    ]);

    // Set the new image path and clear the newImage property
    $this->imagePath = $newImagePath;
    $this->newImage = null;
}


public function mount($modelId)
{
    $model = Model::find($modelId);
    $this->imagePath = $model->image_path;
    $this->modelId = $modelId;
}
