Get-ChildItem -Filter "icons_*.svg" | ForEach-Object {
    $oldName = $_.Name
    $newName = $oldName -replace "^icons_", ""
    Rename-Item -Path $_.FullName -NewName $newName
}