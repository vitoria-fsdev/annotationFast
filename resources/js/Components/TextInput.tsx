export default function TextInput ({ label, ...props}: any) {
    return (
        <div className='flex flex-col mb-4'>
            <label className='text-sm text-gray-700 mb-1'>{label}</label>
            <input className='border border-gray-300 rounded-md p-2 shadow-sm' {...props} />
        </div>
    );    
}