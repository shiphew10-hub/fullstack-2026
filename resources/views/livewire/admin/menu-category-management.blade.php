<div class="max-w-7xl mx-auto p-6">
    <p class="text-2xl font-bold text-pink-800 mb-6">Menu Category Management</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
        <div class="bg-white rounded-xl shadow-amber-200 shadow-md p-8">
            <h2 class="text-lg font-semibold mb-4">Add New Category</h2>
            <form action="" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium mb-2">
                        Category Name
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name"
                        class="w-full py-2 px-4 border border-gray-300  focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none"
                        placeholder="Enter category name"
                    >
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium mb-2">
                        Category Description
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name"
                        class="w-full py-2 px-4 border border-gray-300  focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 outline-none"
                        placeholder="Enter category Desc"
                    >
                </div>
                
                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-pink-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 shadow-sm hover:shadow-md"
                >
                    Add Category
                </button>
            </form>
        </div>

        <div class="bg-white rounded-xl shadow-amber-200 shadow-md p-8">
            <h2 class="text-lg font-semibold mb-4">Existing Categories</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-200">
                    <span class="font-medium">Appetizers</span>
                    <div class="flex gap-2">
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</button>
                        <button class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-200">
                    <span class="font-medium">Main Course</span>
                    <div class="flex gap-2">
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</button>
                        <button class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-200">
                    <span class="font-medium">Desserts</span>
                    <div class="flex gap-2">
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</button>
                        <button class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
