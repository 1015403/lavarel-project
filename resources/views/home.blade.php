@extends('layouts.app')
@section('content')
    <header>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="text-center sm:text-left">
                <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                    Welcome Back!
                </h1>

                <p class="mt-1.5 text-sm text-gray-500">
                    Let's write a new blog post! 🎉
                </p>
            </div>

            <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
                <button
                    class="inline-flex items-center justify-center rounded-lg border border-gray-200 px-5 py-3 text-gray-500 transition hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:ring"
                    type="button"
                >
                    <span class="text-sm font-medium"> View Website </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-1.5 h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                        />
                    </svg>
                </button>

                <button
                    class="block rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
                    type="button"
                >
                    Create Post
                </button>
            </div>
        </div>
    </div>
</header>
    <!--
      This component uses @tailwindcss/forms

      yarn add @tailwindcss/forms
      npm install @tailwindcss/forms

      plugins: [require('@tailwindcss/forms')]
    -->

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>

            <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla
                eaque error neque ipsa culpa autem, at itaque nostrum!
            </p>
        </div>

        <form action="" class="mx-auto mt-8 mb-0 max-w-md space-y-4">
            <div>
                <label for="email" class="sr-only">Email</label>

                <div class="relative">
                    <input
                        type="email"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                        placeholder="Enter email"
                    />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
            />
          </svg>
        </span>
                </div>
            </div>

            <div>
                <label for="password" class="sr-only">Password</label>
                <div class="relative">
                    <input
                        type="password"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                        placeholder="Enter password"
                    />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
            />
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
            />
          </svg>
        </span>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    No account?
                    <a class="underline" href="">Sign up</a>
                </p>

                <button
                    type="submit"
                    class="ml-3 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
                >
                    Sign in
                </button>
            </div>
        </form>
    </div>


@endsection

