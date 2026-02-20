<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Books | Interactive Cares</title>
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
            <div>
              <h1 class="text-xl font-bold text-gray-800">Books</h1>
              <p class="text-sm text-gray-500">Manage your book collection</p>
            </div>

            <div class="flex items-center space-x-4">
              <a
                href="{{ route('books.create') }}"
                class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-200 shadow-md"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-5 h-5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15"
                  />
                </svg>
                <span class="hidden sm:inline">Add Book</span>
              </a>

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
          </div>
        </header>

        @if(session('success'))
    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

        <!-- Content -->
        <div class="flex-1 p-6 lg:p-8">
          <!-- Books List -->
          <div class="bg-white rounded-xl shadow overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-2"></div>
            <div class="overflow-x-auto">
              <table class="w-full">
                <thead class="bg-gray-50 border-b">
                  <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Cover</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Author</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">ISBN</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">

@forelse($books as $book)
<tr class="hover:bg-gray-50 transition-colors">
    <td class="px-6 py-4">
      @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) ?? 'https://picsum.photos/200/300' }}" 
                         class="w-12 h-16 object-cover rounded-lg shadow-sm"
                         alt="Book Cover">
                @else
                    <img src="{{ 'https://picsum.photos/200/300' }}" 
                         class="w-12 h-16 object-cover rounded-lg shadow-sm"
                         alt="Book Cover">
                @endif
    </td>

    <td class="px-6 py-4">
        <div class="font-medium text-gray-800">
            {{ $book->title }}
        </div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-600">
        {{ $book->author_name ?? 'N/A' }}
    </td>

    <td class="px-6 py-4">
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
            {{ $book->category_name ?? 'N/A' }}
        </span>
    </td>

    <td class="px-6 py-4 text-sm text-gray-600">
        {{ $book->isbn }}
    </td>

    <td class="px-6 py-4">
        @if($book->status == 'available')
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                Available
            </span>
        @elseif($book->status == 'borrowed')
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                Borrowed
            </span>
        @else
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                Unavailable
            </span>
        @endif
    </td>

    <td class="px-6 py-4">
        <div class="flex items-center space-x-2">

            <!-- Edit -->
            <a href="{{ route('books.edit', $book->id) }}"
               class="text-indigo-600 hover:text-indigo-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
            </a>

            <!-- Delete -->
            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Are you sure?')"
                        class="text-red-600 hover:text-red-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </form>

        </div>
    </td>
</tr>

@empty
<tr>
    <td colspan="7" class="px-6 py-6 text-center text-gray-500">
        No Books Found
    </td>
</tr>
@endforelse

</tbody>

              </table>
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
    </script>
  </body>
</html>
