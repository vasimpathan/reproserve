<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name"
        value="{{ old('name', $page->name ?? '') }}"
        class="form-control" required>
</div>

<div class="mb-3">
    <label>Content</label>

    <!-- Hidden Input to store HTML content -->
    <textarea name="content" id="content-input" hidden>
        {{ old('content', $page->content ?? '') }}
    </textarea>

    <!-- Quill Editor -->
    <div id="snow-editor" style="height: 300px;">{!! old('content', $page->content ?? '') !!}</div>
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-select">
        <option value="1" {{ old('status', $page->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
        <option value="0" {{ old('status', $page->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
    </select>
</div>

<button class="btn btn-primary">Save</button>

