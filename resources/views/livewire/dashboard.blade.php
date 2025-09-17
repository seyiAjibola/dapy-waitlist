<div>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="">
                <table class="table-auto md:table-fixed w-full border-collapse text-left">
                  <!-- head -->
                  <thead class="bg-neutral-200 dark:bg-neutral-700">
                    <tr>
                      <th class="p-4">Full Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Employment Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($waitlist as $data)
                            <!-- row 1 -->
                        <tr>
                            <td class="p-4">{{ $data->full_name }}</th>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->employment_type }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
