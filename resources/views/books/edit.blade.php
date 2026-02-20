<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Book | Interactive Cares</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              indigo: {
                50: "#eef2ff",
                100: "#e0e7ff",
                500: "#6366f1",
                600: "#4f46e5",
                700: "#4338ca",
              },
              purple: {
                50: "#faf5ff",
                500: "#a855f7",
                600: "#9333ea",
                700: "#7e22ce",
              },
            },
          },
        },
      };
    </script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap");
      body {
        font-family: "Inter", sans-serif;
      }
      .sidebar-link {
        transition: all 0.2s ease;
      }
      .sidebar-link:hover,
      .sidebar-link.active {
        background-color: #f3f4f6;
        border-left: 4px solid #4f46e5;
      }
      .dropdown-menu {
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.2s ease;
      }
      .dropdown-menu.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
      }
      .upload-zone {
        border: 2px dashed #d1d5db;
        transition: all 0.2s ease;
      }
      .upload-zone:hover,
      .upload-zone.dragover {
        border-color: #4f46e5;
        background-color: #eef2ff;
      }
    </style>
  </head>
  <body class="bg-gray-50 min-h-screen">
    <!-- Dashboard Container -->
    <div class="flex flex-col lg:flex-row min-h-screen">
      <!-- Sidebar -->
      <aside
        class="lg:w-64 bg-white shadow-lg z-10 lg:h-screen lg:sticky lg:top-0"
      >
        <div class="p-6 border-b">
          <div class="flex items-center space-x-3">
            <div
              class="bg-gradient-to-r from-indigo-500 to-purple-600 w-10 h-10 rounded-xl flex items-center justify-center"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-5 h-5 text-white"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div>
              <h1
                class="font-bold text-lg bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent"
              >
                Interactive Cares
              </h1>
              <p class="text-xs text-gray-500">Dashboard</p>
            </div>
          </div>
        </div>

        <div class="p-4">
          <nav class="space-y-1">
            <a
              href="./dashboard.html"
              class="flex items-center space-x-3 p-3 rounded-lg sidebar-link"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 text-gray-500"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                />
              </svg>
              <span class="font-medium">My Profile</span>
            </a>

            <div class="pt-4 pb-2">
              <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Book Management</p>
            </div>

            <a
              href="{{ route('categories.index') }}"
              class="flex items-center space-x-3 p-3 rounded-lg sidebar-link"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 text-gray-500"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z"
                />
              </svg>
              <span class="font-medium">Categories</span>
            </a>
            <a
              href="{{ route('authors.index') }}"
              class="flex items-center space-x-3 p-3 rounded-lg sidebar-link"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 text-gray-500"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                />
              </svg>
              <span class="font-medium">Authors</span>
            </a>
            <a
              href="{{ route('books.index') }}"
              class="flex items-center space-x-3 p-3 rounded-lg sidebar-link active"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 text-indigo-600"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"
                />
              </svg>
              <span class="font-medium">Books</span>
            </a>
          </nav>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="flex-1 flex flex-col">
        <!-- Top Header -->
        <header class="bg-white shadow-sm sticky top-0 z-20">
          <div class="px-6 lg:px-8 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
              <a href="{{ route('books.index') }}" class="text-gray-500 hover:text-gray-700 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
              </a>
              <div>
                <h1 class="text-xl font-bold text-gray-800">Create Book</h1>
                <p class="text-sm text-gray-500">Add a new book to the collection</p>
              </div>
            </div>

            <!-- User Dropdown -->
            <div class="relative">
              <button
                id="userMenuButton"
                class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-50 transition-colors"
                onclick="toggleDropdown()"
              >
                <div class="w-9 h-9 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center text-white font-medium text-sm">
                  AJ
                </div>
                <div class="hidden md:block text-left">
                  <p class="text-sm font-medium text-gray-700">Alex Johnson</p>
                  <p class="text-xs text-gray-500">alex.johnson@example.com</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </button>

              <!-- Dropdown Menu -->
              <div
                id="userDropdown"
                class="dropdown-menu absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg border py-2"
              >
                <div class="px-4 py-3 border-b">
                  <p class="text-sm font-medium text-gray-900">Alex Johnson</p>
                  <p class="text-xs text-gray-500 truncate">alex.johnson@example.com</p>
                </div>
                <a
                  href="./dashboard.html"
                  class="flex items-center space-x-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 transition-colors"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                  </svg>
                  <span>My Profile</span>
                </a>
                <a
                  href="./edit-profile.html"
                  class="flex items-center space-x-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 transition-colors"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                  <span>Edit Profile</span>
                </a>
                <a
                  href="./change-password.html"
                  class="flex items-center space-x-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 transition-colors"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <span>Change Password</span>
                </a>
                <div class="border-t my-2"></div>
                <a
                  href="#"
                  class="flex items-center space-x-3 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition-colors"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                  </svg>
                  <span>Logout</span>
                </a>
              </div>
            </div>
          </div>
        </header>

        <!-- Content -->
        <div class="flex-1 p-6 lg:p-8">
  <!-- Create Form -->
  <div class="max-w-3xl">
    <div class="bg-white rounded-xl shadow overflow-hidden">
      <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-2"></div>

      <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
        @csrf
        @method('PUT')

        <!-- Book Cover Upload -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Book Cover</label>
          <div class="flex items-start space-x-6">
            <!-- Preview Area -->
            <div class="flex-shrink-0">
              <div
                id="imagePreview"
                class="w-32 h-44 rounded-lg bg-gray-100 border-2 border-gray-200 flex items-center justify-center overflow-hidden"
              >
                @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" class="w-full h-full object-cover">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-300">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                @endif
              </div>
            </div>

            <!-- Upload Area -->
            <div class="flex-1">
              <div
                id="uploadZone"
                class="upload-zone rounded-lg p-6 text-center cursor-pointer"
                onclick="document.getElementById('coverImage').click()"
              >
                <input
                  type="file"
                  id="coverImage"
                  name="cover_image"
                  accept="image/*"
                  class="hidden"
                  onchange="previewImage(event)"
                />
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-gray-400 mx-auto mb-3">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                </svg>
                <p class="text-sm text-gray-600 mb-1">
                  <span class="font-medium text-indigo-600">Click to upload</span> or drag and drop
                </p>
                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
              </div>
              <p class="text-xs text-gray-500 mt-2">Recommended: 300x400px ratio</p>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
              Book Title <span class="text-red-500">*</span>
            </label>
            <input
              type="text"
              id="title"
              name="title"
              value="{{ old('title', $book->title) }}"
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
              placeholder="Enter book title"
            />
          </div>

          <div>
            <label for="isbn" class="block text-sm font-medium text-gray-700 mb-2">
              ISBN <span class="text-red-500">*</span>
            </label>
            <input
              type="text"
              id="isbn"
              name="isbn"
              value="{{ old('isbn', $book->isbn) }}"
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
              placeholder="978-0-7475-3269-9"
            />
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="author" class="block text-sm font-medium text-gray-700 mb-2">
              Author <span class="text-red-500">*</span>
            </label>
            <select
              id="author"
              name="author_id"
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
            >
              <option value="">Select an author</option>
              @foreach($authors as $author)
                  <option value="{{ $author->id }}"
                    {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>
                      {{ $author->name }}
                  </option>
              @endforeach
            </select>
          </div>

          <div>
            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
              Category <span class="text-red-500">*</span>
            </label>
            <select
              id="category"
              name="category_id"
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
            >
              <option value="">Select a category</option>
              @foreach($categories as $category)
                  <option value="{{ $category->id }}"
                    {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                  </option>
              @endforeach
            </select>
          </div>
        </div>

        <div>
          <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
          <textarea
            id="description"
            name="description"
            rows="4"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors resize-none"
            placeholder="Enter book description"
          >{{ old('description', $book->description) }}</textarea>
        </div>

        <div>
          <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
          <select
            id="status"
            name="status"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
          >
            <option value="available" {{ old('status', $book->status) == 'available' ? 'selected' : '' }}>Available</option>
            <option value="borrowed" {{ old('status', $book->status) == 'borrowed' ? 'selected' : '' }}>Borrowed</option>
            <option value="reserved" {{ old('status', $book->status) == 'reserved' ? 'selected' : '' }}>Reserved</option>
          </select>
        </div>

        <div class="flex items-center justify-end space-x-4 pt-4">
          <a
            href="{{ route('books.index') }}"
            class="px-6 py-3 border border-gray-300 rounded-lg text-gray-600 hover:text-gray-800 hover:border-gray-400 transition-all duration-200"
          >
            Cancel
          </a>
          <button
            type="submit"
            class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-200 shadow-md"
          >
            Update Book
          </button>
        </div>

</form>

    </div>
  </div>
</div>

      </main>
    </div>

    <script>
      // Dropdown functionality
      function toggleDropdown() {
        const dropdown = document.getElementById('userDropdown');
        dropdown.classList.toggle('show');
      }

      // Close dropdown when clicking outside
      document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('userDropdown');
        const button = document.getElementById('userMenuButton');
        if (!dropdown.contains(event.target) && !button.contains(event.target)) {
          dropdown.classList.remove('show');
        }
      });

      // Image preview functionality
      function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview" class="w-full h-full object-cover" />';
          }
          reader.readAsDataURL(file);
        }
      }

      // Drag and drop functionality
      const uploadZone = document.getElementById('uploadZone');

      uploadZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadZone.classList.add('dragover');
      });

      uploadZone.addEventListener('dragleave', () => {
        uploadZone.classList.remove('dragover');
      });

      uploadZone.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadZone.classList.remove('dragover');
        const file = e.dataTransfer.files[0];
        if (file && file.type.startsWith('image/')) {
          document.getElementById('coverImage').files = e.dataTransfer.files;
          const event = { target: { files: [file] } };
          previewImage(event);
        }
      });
    </script>
  </body>
</html>
