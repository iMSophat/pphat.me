import React, {useEffect, useState} from 'react';
import ReactDOM from 'react-dom';
import ListLoader from './ListLoader'
// import axios from 'axios';

function Example() {
    const [state, setData] = useState({
        users: ''
    });
    
    const fetchData = async () => {
        const api = await fetch("api/users");
        setData({
            users: await api.json()
        });
    };

    useEffect(() => {
        fetchData();
    }, [])

    return (
        <div className="overflow-hidden bg-white rounded-md p-5">
            <table className='w-full border'>
                <thead>
                    <tr>
                        <th className='group border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200 text-center'>No</th>
                        <th className='text-left group border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200'>Name</th>
                        <th className='text-left group border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200'>Email</th>
                        <th className='text-left group border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200'>Status</th>
                    </tr>
                </thead>
                <tbody>
                    { 
                        state?.users?.data ? 
                        state?.users?.data?.slice(0, 5).map(
                            (user) => (
                                <tr key={user?.id}>
                                    <td className='text-center border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.id}</td>
                                    <td className='border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.name}</td>
                                    <td className='border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.email}</td>
                                    <td className='border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.status? 'enabled': 'disabled'}</td>
                                </tr>
                            )
                        ) : <ListLoader col={3}/>
                    }
                </tbody>
            </table>
            <div>
                
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
