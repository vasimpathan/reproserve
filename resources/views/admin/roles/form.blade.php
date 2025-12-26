<div class="mb-3">
    <label>Role Name</label>
    <input type="text" name="name"
           value="{{ old('name', $role->name ?? '') }}"
           class="form-control" required>
</div>

<div class="mb-3">
    <label>Description (Optional)</label>
    <textarea name="description" class="form-control" rows="4">
        {{ old('description', $role->description ?? '') }}
    </textarea>
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-select">
        <option value="1" {{ old('status', $role->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
        <option value="0" {{ old('status', $role->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
    </select>
</div>

<button class="btn btn-success">Save</button>
